GRANT ALL PRIVILEGES ON *.* 'ptmUser'@'localhost' IDENTIFIED BY 'ptmUser' WITH GRANT OPTION;
COMMIT;

DROP DATABASE IF EXISTS dbPTM;

CREATE DATABASE dbPTM;

-- Tabla de Bandas
CREATE TABLE dbPTM.Band(
	idBand INT(10) NOT NULL AUTO INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	bandName VARCHAR(40) NOT NULL COMMENT "Nombre de la banda",
	bandGenre VARCHAR(40) NOT NULL COMMENT "Genero de la banda",
	createdDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Bandas";

-- Tabla de Usuarios
CREATE TABLE dbPTM.User(
	idUser INT(10) NOT NULL AUTO INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	firstName VARCHAR(25) NOT NULL COMMENT "Nombres del usuario",
	lastName VARCHAR(25) NOT NULL COMMENT "Apellidos del usuario",
	userName VARCHAR(20) NOT NULL COMMENT "Usuario",
	email VARCHAR(60) NOT NULL COMMENT "Correo electrónico del usuario",
	location VARCHAR(60) NOT NULL COMMENT "Ubicación",
	userType INT(2) NOT NULL COMMENT "Nivel de acceso del usuario",
	createdDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Usuarios";

-- Tabla de Recintos
CREATE TABLE dbPTM.Venue(
	idVenue INT(10) NOT NULL AUTO INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	venueName VARCHAR(40) NOT NULL COMMENT "Nombre del recinto",
	location VARCHAR(60) NOT NULL COMMENT "Ubicación",
	createdDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización"
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Recintos";

-- Tabla de Eventos
CREATE TABLE dbPTM.Event(
	idEvent INT(10) NOT NULL AUTO INCREMENT PRIMARY KEY COMMENT "Identificador único del registro",
	eventName VARCHAR(60) NOT NULL COMMENT "Nombre del evento",
	idVenue INT(10) NOT NULL COMMENT "Identificador del recinto",
	userName VARCHAR(20) NOT NULL COMMENT "Usuario solicitante",
	idBand INT(10) NOT NULL COMMENT "Identificador de la banda",
	votes INT(10) NOT NULL COMMENT "Votos solicitados",
	votesReached INT(10) NOT NULL DEFAULT 0 COMMENT "Votos alcanzados"
	createdDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de creación del registro",
	lastUpdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "Fecha de la última actualización",
	KEY k_Event_Venue_KEY(idVenue),
	KEY k_Event_Banda_KEY(idBand),
	CONSTRAINT fk_Event_Venue FOREIGN KEY (idVenue) REFERENCES dbPTM.Venue(idVenue),
	CONSTRAINT fk_Event_Band FOREIGN KEY (idBand) REFERENCES dbPTM.Band(idBand)
)DEFAULT CHARSET=utf8 COMMENT "Tabla de Eventos";

COMMIT;