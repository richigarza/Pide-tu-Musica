USE dbPTM;

INSERT INTO Band (bandName, bandGenre) VALUES ('Metallica', 'Metal');
INSERT INTO User (firstName, lastName, userName, email, location, userType) VALUES('Richi', 'Garza', 'RichiGarza', '', 'MTY', 2);
INSERT INTO Venue (venueName, location) VALUES('Estadio BBVA Bancomer', 'Guadalupe, Nuevo León'); 
INSERT INTO Event (eventName, idVenue, idUser, idBand, votes, VotesReached) VALUES('Corona North Side', 1, 1, 1, 10000, 0);
INSERT INTO RelVotes (idEvent, idUser) VALUES(1, 1);

DROP PROCEDURE IF EXISTS spTest;
DROP PROCEDURE IF EXISTS sp_newUser;
delimiter //
CREATE PROCEDURE spTest()
BEGIN
	UPDATE User SET email='richi@conglom-osoft.net', lastUpdate=CURRENT_TIMESTAMP;
END//

CREATE PROCEDURE sp_newUser(
	IN firstName VARCHAR(25),
	IN lastName VARCHAR(25),
	IN userName VARCHAR(20),
	IN email VARCHAR(60),
	IN location VARCHAR(60),
	IN userType INT
)
BEGIN
	INSERT INTO User (firstName, lastName, userName, email, location, userType) 
	VALUES(firstName, lastName, userName, email, location, userType);
END//

delimiter ;