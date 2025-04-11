/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/


CREATE TABLE OutdoorClothingCategories (
    CategoryID        INT(11)        NOT NULL,
    CategoryCode      VARCHAR(10)    NOT NULL UNIQUE,
    CategoryName      VARCHAR(255)   NOT NULL,
    AisleNumber       INT(11)        NOT NULL,
    DateCreated       DATETIME       NOT NULL DEFAULT NOW(),
    PRIMARY KEY (CategoryID)
);


SELECT * FROM OutdoorClothingCategories;

DELETE FROM `OutdoorClothingCategories` where `CategoryID` = 8