CREATE TABLE `doctor` (
  `Id` INT NOT NULL auto_increment,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `FirstName` VARCHAR(45) NULL,
  `Lastname` VARCHAR(45) NULL,
  `Pincode` INT NULL,
  `Address` VARCHAR(45) NULL,
  `phoneno` INT NULL,
  `role` VARCHAR(45) NULL,
  `dob` DATETIME NULL,
  PRIMARY KEY (`Id`));


CREATE TABLE `paitent` (
  `id` INT NOT NULL auto_increment,
  `firstname` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `phoneno` INT NULL,
  `emailid` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `pincode` INT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `apointment` (
  `appoint_id` VARCHAR(45) NOT NULL,
  `doctor_id` INT NULL,
  `paitent_id` VARCHAR(45) NULL,
  PRIMARY KEY (`appoint_id`));
