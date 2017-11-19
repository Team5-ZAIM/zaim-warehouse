use ee418_zaim_tech;

-- Commeneted code is Old -- 

CREATE TABLE Inventory (
    Item_number INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name CHAR(250) NOT NULL,
    Descr CHAR(250),
    Quantity INT NOT NULL,
    Price DECIMAL(7,2),
    Category CHAR(100) NOT NULL,
    Photo_ID INT 
);

Select * from Inventory;

/*
-- OLD --
CREATE TABLE User_Accounts (
    Company_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    User_ID INT NOT NULL,
    Password CHAR(100) NOT NULL,
    User_Email CHAR(150) NOT NULL,
    First_Name CHAR(250) NOT NULL,
    Last_Name CHAR(250) NOT NULL,
    User_Phone_Number VARCHAR(20),
    Company_Name CHAR(250) NOT NULL
--    CONSTRAINT fk_Company_Name_From_User_Accounts FOREIGN KEY (Company_Name)
--        REFERENCES Company (Company_Name)
--        ON DELETE CASCADE
);

drop table User_Accounts;
*/

CREATE TABLE User_Accounts (
    User_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    User_Email CHAR(150) NOT NULL,
    Username CHAR(100) NOT NULL,
    Password CHAR(100) NOT NULL,
    First_Name CHAR(250) NOT NULL,
    Last_Name CHAR(250) NOT NULL,
    User_Phone_Number VARCHAR(20)
--    Company_Name CHAR(250) NOT NULL,
--    Company_ID INT NOT NULL
);

Select * from User_Accounts;

/*
CREATE TABLE Company (
    Company_ID INT UNIQUE,
    Company_Name CHAR(250) NOT NULL PRIMARY KEY,
    Company_Email CHAR(150) NOT NULL,
    Address_ID INT NOT NULL,
    Company_Phone_Number VARCHAR(20)
);

select * from Company;
drop table Company;

CREATE TABLE Company_Address (
    Address_ID INT NOT NULL PRIMARY KEY,
    Company_Name CHAR(250) NOT NULL,
    Street_Number INT NOT NULL,
    Street_Name CHAR(250) NOT NULL,
    City CHAR(250) NOT NULL,
    State_Providence CHAR(250) NOT NULL,
    Country CHAR(250) NOT NULL,
    Postal_Code INT NOT NULL
);

Select * from Company_Address;


alter table User_Accounts add constraint fk_Company_Name_From_User_Accounts foreign key (Company_Name)
REFERENCES Company (Company_Name);

alter table Company add constraint fk_Company_ID foreign key (Company_ID)
REFERENCES User_Accounts (Company_ID);

alter table Company add constraint fk_Address_ID foreign key (Address_ID)
REFERENCES Company_Address (Address_ID);

alter table Company_Address add constraint fk_Company_Name_From_Company_Address foreign key (Company_Name)
REFERENCES Company (Company_Name);

alter table Inventory modify Price Decimal(8,2);
*/

-- --------------------------------------------------------------------------------------------------------------


alter table Company drop column Address_ID;

alter table Company drop foreign key fk_Company_ID;

alter table Company drop column Company_ID;
-- alter table Company drop primary key, add primary key Company_ID INT UNIQUE primary key;

alter table User_Accounts drop foreign key fk_Company_Name_From_User_Accounts;
alter table User_Accounts drop primary key, add primary key( Company_ID, User_ID );


-- --------------------------------------------------------------------------------------------------------------

-- Run if we want to add to User_Accounts --

alter table User_Accounts add column Company_Name CHAR(250) NOT NULL;
alter table User_Accounts add column Company_ID INT NOT NULL;



