/*
David Guemes Giles
02/28/25 
IT-202-002 Phase 1 Assignment: Login and Logout
dg224@njit.edu
*/
CREATE TABLE outdoorGearManagers (
 outdoorGearManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,

 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (outdoorGearManagerID)
);

INSERT INTO outdoorGearManagers(outdoorGearManagerID, emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
(100, 'john@outdoorgear.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'John', 'Sanchez', NOW());

INSERT INTO outdoorGearManagers(outdoorGearManagerID, emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
(101, 'savir@outdoorgear.com', SHA2('oneL0ngP@ssword', 256), 'He/Him', 'Savir', 'Gordon', NOW());

INSERT INTO outdoorGearManagers(outdoorGearManagerID, emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
(102, 'marisol@outdoorgear.com', SHA2('myOneL0ngP@ssword', 256), 'She/Her', 'Marisol', 'Lopes', NOW());

SELECT * FROM outdoorGearManagers;