/*
David Guemes Giles
03/15/25 
IT-202-002 Phase 2 Assignment: CRUD Categories and Products
dg224@njit.edu
*/
CREATE TABLE OutdoorClothingProducts (
    ProductID         INT(11)        NOT NULL AUTO_INCREMENT,
    ProductCode       VARCHAR(50)    NOT NULL UNIQUE,
    ProductName       VARCHAR(255)   NOT NULL,
    ProductDescription TEXT          NOT NULL,
    Model            VARCHAR(50)     NOT NULL,
    Size             VARCHAR(50)     NOT NULL,
    Color            VARCHAR(50)     NOT NULL,
    CategoryID       INT(11)        NOT NULL,
    WholesalePrice   DECIMAL(10,2)  NOT NULL,
    ListPrice        DECIMAL(10,2)  NOT NULL,
    DateCreated      DATETIME       NOT NULL DEFAULT NOW(),
    PRIMARY KEY (ProductID)
);

-- checking to see if my table works

Select * from OutdoorClothingProducts;


DELETE FROM `OutdoorClothingProducts` where `ProductID`= 20