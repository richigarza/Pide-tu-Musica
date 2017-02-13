-- PTM_SCHEMA.sql
-- Autor: Richi Garza
-- Fecha: 09-feb-2017

CREATE USER 'ptmUser'@'localhost' IDENTIFIED BY '123pormi';

COMMIT;

DROP DATABASE IF EXISTS dbPTM;

CREATE DATABASE dbPTM;

-- Tabla de Bandas
DROP TABLE IF EXISTS dbPTM.Band;

CREATE TABLE dbPTM.Band(
	idBand INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	bandName VARCHAR(40) NOT NULL COMMENT "Nombre de la banda",
	bandGenre VARCHAR(40) NOT NULL COMMENT "Genero de la banda",
	createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Bandas";

-- Tabla de Usuarios
DROP TABLE IF EXISTS dbPTM.User;

CREATE TABLE dbPTM.User(
	idUser INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	firstName VARCHAR(25) NOT NULL COMMENT "Nombres del usuario",
	lastName VARCHAR(25) NOT NULL COMMENT "Apellidos del usuario",
	userName VARCHAR(20) NOT NULL COMMENT "Usuario",
	email VARCHAR(60) NOT NULL COMMENT "Correo electrónico del usuario",
	location VARCHAR(60) NOT NULL COMMENT "Ubicación",
	userType INT(2) NOT NULL COMMENT "Nivel de acceso del usuario",
	createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Usuarios";

-- Tabla de Recintos
DROP TABLE IF EXISTS dbPTM.Venue;

CREATE TABLE dbPTM.Venue(
	idVenue INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	venueName VARCHAR(40) NOT NULL COMMENT "Nombre del recinto",
	location VARCHAR(60) NOT NULL COMMENT "Ubicación",
	createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Recintos";

-- Tabla de Eventos
DROP TABLE IF EXISTS dbPTM.Event;

CREATE TABLE dbPTM.Event(
	idEvent INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	eventName VARCHAR(60) NOT NULL COMMENT "Nombre del evento",
	idVenue INT(10) NOT NULL COMMENT "Identificador del recinto",
	idUser INT(10) NOT NULL COMMENT "Identificador solicitante",
	idBand INT(10) NOT NULL COMMENT "Identificador de la banda",
	votes INT(10) NOT NULL COMMENT "Votos solicitados",
	votesReached INT(10) NOT NULL DEFAULT 0 COMMENT "Votos alcanzados",
	createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización",
	KEY k_Event_Venue_KEY(idVenue),
	KEY k_Event_User_KEY(idUser),
	KEY k_Event_Banda_KEY(idBand),
	CONSTRAINT fk_Event_Venue FOREIGN KEY (idVenue) REFERENCES dbPTM.Venue(idVenue),
	CONSTRAINT fk_Event_User FOREIGN KEY (idUser) REFERENCES dbPTM.User(idUser),
	CONSTRAINT fk_Event_Band FOREIGN KEY (idBand) REFERENCES dbPTM.Band(idBand)
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Eventos";

-- Tabla de Relacion de votos
DROP TABLE IF EXISTS dbPTM.RelVotes;

CREATE TABLE dbPTM.RelVotes(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Identificador del registro",
	idEvent INT(10) NOT NULL COMMENT "Identificador del evento",
	idUser INT(10) NOT NULL COMMENT "Identificador del usuario que voto",	
	createdDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización",
	KEY k_RelVotos_Event_KEY(idEvent),
	KEY k_RelVotos_User_KEY(idUser),
	CONSTRAINT fk_RelVotos_Event FOREIGN KEY (idEvent) REFERENCES dbPTM.Event(idEvent),
	CONSTRAINT fk_RelVotos_User FOREIGN KEY (idUser) REFERENCES dbPTM.User(idUser)
)DEFAULT CHARSET=utf8 COMMENT "Tabla de relacion de votos y usuarios";

COMMIT;