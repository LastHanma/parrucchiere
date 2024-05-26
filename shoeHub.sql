CREATE TABLE Negozio (
    ID_negozio INT PRIMARY KEY,
    num_dipendenti INT,
    nome_negozio VARCHAR(255),
    residenza VARCHAR(255),
    partita_iva VARCHAR(20)
);

CREATE TABLE Scarpe (
    ID_scarpa INT PRIMARY KEY,
    colore_scarpa VARCHAR(50),
    taglia VARCHAR(10),
    -- Altri attributi delle scarpe
);

CREATE TABLE Acquisto (
    ID_acquisto INT PRIMARY KEY,
    ID_negozio INT,
    ID_scarpa INT,
    FOREIGN KEY (ID_negozio) REFERENCES Negozio(ID_negozio),
    FOREIGN KEY (ID_scarpa) REFERENCES Scarpe(ID_scarpa)
);

CREATE TABLE Rivenditori (
    ID_rivenditore INT PRIMARY KEY,
    nome_rivenditore VARCHAR(255),
    residenza VARCHAR(255),
    -- Altri attributi dei rivenditori
);

CREATE TABLE Vendita (
    ID_vendita INT PRIMARY KEY,
    ID_scarpa INT,
    ID_rivenditore INT,
    FOREIGN KEY (ID_scarpa) REFERENCES Scarpe(ID_scarpa),
    FOREIGN KEY (ID_rivenditore) REFERENCES Rivenditori(ID_rivenditore)
);

CREATE TABLE Modelli (
    ID_modello INT PRIMARY KEY,
    descrizione_modello VARCHAR(255),
    nome_modello VARCHAR(255),
    -- Altri attributi dei modelli
);

CREATE TABLE AssociazioneModelloScarpe (
    ID_associato INT PRIMARY KEY,
    ID_scarpa INT,
    ID_modello INT,
    FOREIGN KEY (ID_scarpa) REFERENCES Scarpe(ID_scarpa),
    FOREIGN KEY (ID_modello) REFERENCES Modelli(ID_modello)
);

CREATE TABLE Design (
    ID_design INT PRIMARY KEY,
    nome_design VARCHAR(255),
    descrizione_design VARCHAR(255),
    -- Altri attributi dei design
);

CREATE TABLE AssociazioneModelloDesign (
    ID_associato INT PRIMARY KEY,
    ID_modello INT,
    ID_design INT,
    FOREIGN KEY (ID_modello) REFERENCES Modelli(ID_modello),
    FOREIGN KEY (ID_design) REFERENCES Design(ID_design)
);

CREATE TABLE Artisti (
    ID_artista INT PRIMARY KEY,
    nome_artista VARCHAR(255),
    residenza_artista VARCHAR(255),
    email_artista VARCHAR(255),
    -- Altri attributi degli artisti
);

CREATE TABLE AssociazioneDesignArtista (
    ID_associato INT PRIMARY KEY,
    ID_design INT,
    ID_artista INT,
    FOREIGN KEY (ID_design) REFERENCES Design(ID_design),
    FOREIGN KEY (ID_artista) REFERENCES Artisti(ID_artista)
);

CREATE TABLE Brand (
    ID_brand INT PRIMARY KEY,
    nome_brand VARCHAR(255),
    -- Altri attributi dei brand
);

CREATE TABLE AssociazioneDesignBrand (
    ID_associato INT PRIMARY KEY,
    ID_design INT,
    ID_brand INT,
    FOREIGN KEY (ID_design) REFERENCES Design(ID_design),
    FOREIGN KEY (ID_brand) REFERENCES Brand(ID_brand)
);

CREATE TABLE Stock (
    ID_stock INT PRIMARY KEY,
    nome_stock VARCHAR(255),
    descrizione_stock VARCHAR(255),
    capacita INT,
    residenza_stock VARCHAR(255),
    -- Altri attributi dello stock
);

CREATE TABLE AssociazioneBrandStock (
    ID_associato INT PRIMARY KEY,
    ID_brand INT,
    ID_stock INT,
    FOREIGN KEY (ID_brand) REFERENCES Brand(ID_brand),
    FOREIGN KEY (ID_stock) REFERENCES Stock(ID_stock)
);
