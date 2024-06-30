from fastapi import FastAPI
import mysql.connector
from pydantic import BaseModel
import bcrypt
from datetime import datetime, time
# per evitare errori di CORS
from fastapi.middleware.cors import CORSMiddleware
from typing import Optional
from pytz import timezone  # pytz per utilizzare timezone
#per invio mail
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Cambia con l'origine del  frontend
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
    data_appuntamento: datetime
    ora_appuntamento: time
    id_utente: Optional[int] = None

class Messaggio(BaseModel):
    msg: str
    id_utente: Optional[int] = None  # Reso opzionale 
    status:bool=False

class messaggio_Prenotazione(BaseModel):
    msg: str
    id_prenotazione: Optional[int] 
    status:bool=False

# file di configurazione per connessione
config = {
    "user": "root",
    # "password": "",
    "host": "localhost",
    "database": "parrucchiere"
}


#Funzione per invio delle mail 
def send_styled_email(sender_email, sender_password, receiver_email, subject, appuntamento:Appuntamento):
    # Prepara il contenuto HTML dell'email con Bootstrap e CSS in linea
    html_content = f"""
    <!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>{subject}</title>
        <style>
            /* Stili CSS in linea */
            body {{
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                padding: 20px;
            }}
            .container {{
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }}
            .header {{
                background-color: rgb(189, 27, 149);
                color: white;
                text-align: center;
                padding: 10px;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }}
            .title{{
                font-size:1.75rem;
            }}
            .content {{
                background-color: black;
                color: white;
                padding: 20px;
            }}
            .footer {{
                text-align: center;
                padding: 10px;
                background-color: black;
                color: #ffffff;
                border-bottom-left-radius: 8px;
                border-bottom-right-radius: 8px;
            }}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="title">{subject}</h1>
            </div>
            <div class="content">
                <p>Gentile {appuntamento.nome} {appuntamento.cognome},</p>
                <p>Grazie per aver prenotato un appuntamento con Tony & Remo's.</p>
                <p>Ecco i dettagli della tua prenotazione:</p>
                <ul>
                    <li><strong>Servizio:</strong> {appuntamento.servizio}</li>
                    <li><strong>Data:</strong> {appuntamento.data_appuntamento.strftime('%d %B %Y')}</li>
                    <li><strong>Ora:</strong> {appuntamento.ora_appuntamento}</li>
                </ul>
                <p>Ti aspettiamo!</p>
            </div>
            <div class="footer">
                <p>&copy; {datetime.now(timezone('Europe/Rome')).year} Tony & Remo's. Tutti i diritti riservati.</p>
            </div>
        </div>
    </body>
    </html>
    """

    try:
        # Configura il messaggio
        msg = MIMEMultipart()
        msg['From'] = sender_email
        msg['To'] = receiver_email
        msg['Subject'] = subject

        # Aggiungi il contenuto HTML al messaggio
        msg.attach(MIMEText(html_content, 'html'))

        # Connetti al server SMTP di Gmail
        server = smtplib.SMTP('smtp.gmail.com', 587)
        server.starttls()  # Avvia la connessione TLS
        server.login(sender_email, sender_password)  # Esegui il login

        # Invia l'email
        server.sendmail(sender_email, receiver_email, msg.as_string())

        # Chiudi la connessione
        server.quit()

        print("Email inviata con successo!")
    except Exception as e:
        print(f"Errore durante l'invio dell'email: {e}")


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
    
    return {"msg": "Registrazione eseguita con successo!","id_utente":id_utente,"status":True}

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
    # Utilizzo della funzione
    sender_email = 'tonyremosbarbiere@gmail.com'
    sender_password = 'brlgttzzcaguhbum'  #  la password per l'app generata
    receiver_email = prenotazione.email
    subject = "Prenotazione-Tony & Remo's"
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor()
        
        query_verifica = """
        SELECT * FROM appuntamenti WHERE email=%s AND data_appuntamento=%s
        """
        parametro_verifica = (prenotazione.email, prenotazione.data_appuntamento.date())
        cursore.execute(query_verifica, parametro_verifica)
        prenotazione_esistente = cursore.fetchone()
        if prenotazione_esistente:
            return {
                "msg": "Hai già effettuato una prenotazione per questa giornata!",
                "id_prenotazione": None,  # Include id_prenotazione with a None value
                "status": False
            }
        
        query = """
        INSERT INTO appuntamenti (nome, cognome, email, telefono, servizio, data_appuntamento, ora_appuntamento)
        VALUES (%s, %s, %s, %s, %s, %s, %s)
        """
        # Converte ora nel formato corretto
        ora_formattata = prenotazione.ora_appuntamento.strftime('%H:%M:%S')
        parametri = (
            prenotazione.nome,
            prenotazione.cognome,
            prenotazione.email,
            prenotazione.telefono,
            prenotazione.servizio,
            prenotazione.data_appuntamento.strftime('%Y-%m-%d'),  # Converte data nel formato corretto
            ora_formattata
        )
        
        cursore.execute(query, parametri)
        connessione.commit()
        id_prenotazione = cursore.lastrowid
        send_styled_email(sender_email, sender_password, receiver_email, subject,prenotazione)
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
    

@app.get("/api/v1/users/appuntamenti/{servizio}/{email}")
def ricercaAppuntamenti(email:str,servizio:str):
    try:
        connessione = mysql.connector.connect(**config)
        cursore = connessione.cursor(dictionary=True)
        cursore.execute("SELECT id_appuntamento,nome,cognome,email,telefono,servizio,data_appuntamento, DATE_FORMAT(ora_appuntamento, '%H:%i') AS ora_appuntamento FROM appuntamenti WHERE servizio=%s AND email=%s",(servizio,email,))
        risultati=cursore.fetchall()
        
        # Stampa di debug per verificare i risultati della query
        print(f"Risultati della query: {risultati}")
        
        if risultati:
            return risultati
    
    except Exception as e:
        return{"Errore durante la ricerca degli appuntamenti"}
    finally:
        cursore.close()
        connessione.close()