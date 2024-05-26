from fastapi import FastAPI
import mysql.connector
from pydantic import BaseModel
import bcrypt
from datetime import datetime, time
# per evitare errori di CORS
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Sostituisci con l'origine del tuo frontend
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

class RegistrazioneUtente(BaseModel):
    username: str
    nome: str
    cognome: str
    email: str
    telefono: str
    pwd: str

class LoginUtente(BaseModel):
    email: str
    pwd: str

class Appuntamento(BaseModel):
    nome: str
    cognome: str
    email: str
    telefono: str
    servizio: str
    data: datetime
    ora: time

class Messaggio(BaseModel):
    msg: str
    id_utente: int  # Rendi opzionale per il login

class messaggio_Prenotazione(BaseModel):
    msg: str
    id_prenotazione:int  # Rendi opzionale per il login
    status:bool=False

# file di configurazione per connessione
config = {
    "user": "root",
    # "password": "",
    "host": "localhost",
    "database": "parrucchiere"
}

@app.get("/")
def welcome():
    return "Benvenuto!"

@app.get("/api/v1/users_registrati")
def recupera_utenti():
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor(dictionary=True)
        cursore.execute("SELECT * FROM utenti")
        utenti = cursore.fetchall()
    finally:
        cursore.close()
        connessione.close()
    
    return utenti

@app.get("/api/v1/users/{email}")
def user(email: str):
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor(dictionary=True)
        cursore.execute("SELECT * FROM utenti WHERE email=%s", (email,))
        user = cursore.fetchone()
    finally:
        cursore.close()
        connessione.close()
    
    if user:
        return user
    else:
        return {"msg": "Utente non trovato"}

@app.post("/api/v1/registrazione", response_model=Messaggio)
def registrazione(utente: RegistrazioneUtente):
    hashed_password = bcrypt.hashpw(utente.pwd.encode('utf-8'), bcrypt.gensalt())
    
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor()
        query = """
        INSERT INTO utenti (username, nome, cognome, email, telefono, pwd)
        VALUES (%s, %s, %s, %s, %s, %s)
        """
        parametri = (
            utente.username,
            utente.nome,
            utente.cognome,
            utente.email,
            utente.telefono,
            hashed_password.decode('utf-8')  # Store the hashed password as a string
        )
        cursore.execute(query, parametri)
        connessione.commit()
        id_utente = cursore.lastrowid
    finally:
        cursore.close()
        connessione.close()
    
    return {"msg": "Utente inserito correttamente!", "id_utente": id_utente}

@app.post("/api/v1/login")
def login(utente: LoginUtente):
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor(dictionary=True)
        query = "SELECT nome, cognome, username, email, pwd FROM utenti WHERE email = %s"
        parametro = (utente.email,)
        cursore.execute(query, parametro)
        user = cursore.fetchone()
    finally:
        cursore.close()
        connessione.close()
    
    if user:
        stored_hashed_password = user["pwd"]
        if bcrypt.checkpw(utente.pwd.encode('utf-8'), stored_hashed_password.encode('utf-8')):
            user["nome"] = user["nome"]
            user["cognome"] = user["cognome"]
            user["username"] = user["username"]
            user["pwd"] = utente.pwd
            return {
                "msg": "Login eseguito con successo!",
                "login_status": True,
                "utente": user
            }
        else:
            return {
                "msg": "Password errata!",
                "login_status": False
            }
    else:
        return {
            "msg": "Nessun utente trovato con quella email!",
            "login_status": False
        }

@app.post("/api/v1/inserimento_prenotazione", response_model=messaggio_Prenotazione)
def prenotazione(prenotazione: Appuntamento):
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor()
        query = """
        INSERT INTO appuntamenti (nome, cognome, email, telefono, servizio, data_appuntamento, ora_appuntamento)
        VALUES (%s, %s, %s, %s, %s, %s, %s)
        """
        # Converte ora nel formato corretto
        ora_formattata = prenotazione.ora.strftime('%H:%M:%S')
        parametri = (
            prenotazione.nome,
            prenotazione.cognome,
            prenotazione.email,
            prenotazione.telefono,
            prenotazione.servizio,
            prenotazione.data.strftime('%Y-%m-%d'),  # Converte data nel formato corretto
            ora_formattata
        )
        cursore.execute(query, parametri)
        connessione.commit()
        id_prenotazione = cursore.lastrowid
        return {
            "msg": "Prenotazione eseguita con successo!",
            "id_prenotazione": id_prenotazione,
            "status": True
        }
    except Exception as e:
        return {
            "msg": f"Errore durante la prenotazione: {str(e)}",
            "status": False
        }
    finally:
        cursore.close()
        connessione.close()
    
   