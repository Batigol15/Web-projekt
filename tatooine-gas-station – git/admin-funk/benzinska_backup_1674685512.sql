

CREATE TABLE `gorivo` (
  `gorivoID` int(11) NOT NULL AUTO_INCREMENT,
  `tipGoriva` varchar(255) NOT NULL,
  `kolicinaGoriva` int(11) NOT NULL,
  `prodanoGoriva` int(11) NOT NULL,
  `cijena` decimal(3,2) NOT NULL,
  PRIMARY KEY (`gorivoID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO gorivo VALUES("1","Benzin","19000","13251","9.65");
INSERT INTO gorivo VALUES("2","Diesel","16000","20200","8.78");



CREATE TABLE `izmjene` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `radnja` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `unixTime` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `userName` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO izmjene VALUES("1","UNOS U RACUNI","Izdan racun ","1674222561","2023-01-20 14:49:21","");
INSERT INTO izmjene VALUES("2","UNOS U RACUNI","Izdan racun ","1674222569","2023-01-20 14:49:29","");
INSERT INTO izmjene VALUES("3","UNOS U RACUNI","Izdan racun ","1674222577","2023-01-20 14:49:37","");
INSERT INTO izmjene VALUES("4","UNOS U RACUNI","Izdan racun ","1674222712","2023-01-20 14:51:52","Toni");
INSERT INTO izmjene VALUES("5","UNOS U RACUNI","Izdan racun ","1674222719","2023-01-20 14:51:59","Toni");
INSERT INTO izmjene VALUES("6","Unos u RACUNI","Izdan racun ","1674232481","2023-01-20 17:34:41","Toni");
INSERT INTO izmjene VALUES("7","Unos u RACUNI","Izdan racun ","1674232489","2023-01-20 17:34:49","Toni");
INSERT INTO izmjene VALUES("8","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674233052","2023-01-20 17:44:12","Toni");
INSERT INTO izmjene VALUES("9","Unos u RACUNI","Izdan racun ","1674233958","2023-01-20 17:59:18","Obiwan");
INSERT INTO izmjene VALUES("10","Unos u RACUNI","Izdan racun ","1674233986","2023-01-20 17:59:46","Obiwan");
INSERT INTO izmjene VALUES("11","Unos u RACUNI","Izdan racun ","1674233992","2023-01-20 17:59:52","Obiwan");
INSERT INTO izmjene VALUES("12","Unos u RACUNI","Izdan racun ","1674233998","2023-01-20 17:59:58","Obiwan");
INSERT INTO izmjene VALUES("13","Unos u RACUNI","Izdan racun ","1674237863","2023-01-20 19:04:23","Obiwan");
INSERT INTO izmjene VALUES("14","Unos u GORIVO","Azurirano stanje prodanog goriva ","1674237863","2023-01-20 19:04:23","Obiwan");
INSERT INTO izmjene VALUES("15","Unos u RACUNI","Izdan racun ","1674433273","2023-01-23 01:21:13","Toni");
INSERT INTO izmjene VALUES("16","Unos u GORIVO","Azurirano stanje prodanog goriva ","1674433273","2023-01-23 01:21:13","Toni");
INSERT INTO izmjene VALUES("17","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674479216","2023-01-23 14:06:56","Obiwan");
INSERT INTO izmjene VALUES("18","Unos u RACUNI","Izdan racun ","1674479267","2023-01-23 14:07:47","Obiwan");
INSERT INTO izmjene VALUES("19","Unos u GORIVO","Azurirano stanje prodanog goriva ","1674479267","2023-01-23 14:07:47","Obiwan");
INSERT INTO izmjene VALUES("20","Unos u RACUNI","Izdan racun ","1674569592","2023-01-24 15:13:12","Obiwan");
INSERT INTO izmjene VALUES("21","Unos u GORIVO","Azurirano stanje prodanog goriva ","1674569592","2023-01-24 15:13:12","Obiwan");
INSERT INTO izmjene VALUES("22","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674569637","2023-01-24 15:13:57","Obiwan");
INSERT INTO izmjene VALUES("23","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674575831","2023-01-24 16:57:11","Toni");
INSERT INTO izmjene VALUES("24","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674575952","2023-01-24 16:59:12","Toni");
INSERT INTO izmjene VALUES("25","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674575994","2023-01-24 16:59:54","Toni");
INSERT INTO izmjene VALUES("26","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576056","2023-01-24 17:00:56","Toni");
INSERT INTO izmjene VALUES("27","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576107","2023-01-24 17:01:47","Toni");
INSERT INTO izmjene VALUES("28","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576212","2023-01-24 17:03:32","Toni");
INSERT INTO izmjene VALUES("29","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576341","2023-01-24 17:05:41","Toni");
INSERT INTO izmjene VALUES("30","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576580","2023-01-24 17:09:40","Toni");
INSERT INTO izmjene VALUES("31","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674576622","2023-01-24 17:10:22","Toni");
INSERT INTO izmjene VALUES("32","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576714","2023-01-24 17:11:54","Toni");
INSERT INTO izmjene VALUES("33","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674576772","2023-01-24 17:12:52","Toni");
INSERT INTO izmjene VALUES("34","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576785","2023-01-24 17:13:05","Toni");
INSERT INTO izmjene VALUES("35","Brisanje u GORIVO","Evidentirano brisanje goriva iz spremnika","1674576841","2023-01-24 17:14:01","Toni");
INSERT INTO izmjene VALUES("36","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674577410","2023-01-24 17:23:30","Toni");
INSERT INTO izmjene VALUES("37","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674577607","2023-01-24 17:26:47","Toni");
INSERT INTO izmjene VALUES("38","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674578247","2023-01-24 17:37:27","Toni");
INSERT INTO izmjene VALUES("39","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674578254","2023-01-24 17:37:34","Toni");
INSERT INTO izmjene VALUES("40","Unos u RACUNI","Izdan racun ","1674581690","2023-01-24 18:34:50","Obiwan");
INSERT INTO izmjene VALUES("41","Unos u GORIVO","Azurirano stanje prodanog goriva ","1674581690","2023-01-24 18:34:50","Obiwan");
INSERT INTO izmjene VALUES("42","Unos u GORIVO","Evidentiran novi unos goriva u spremnik","1674685496","2023-01-25 23:24:56","Rocky");



CREATE TABLE `konfiguracija` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO konfiguracija VALUES("1","Cookie time","2");
INSERT INTO konfiguracija VALUES("2","Pages","7");



CREATE TABLE `racuni` (
  `racunID` int(11) NOT NULL AUTO_INCREMENT,
  `datum` timestamp NOT NULL DEFAULT current_timestamp(),
  `gorivo` varchar(255) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `iznos` decimal(10,2) NOT NULL,
  `zaposlenik` varchar(255) NOT NULL,
  PRIMARY KEY (`racunID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO racuni VALUES("1","2023-01-18 00:42:18","","0","0.00","Toni");
INSERT INTO racuni VALUES("2","2023-01-18 00:45:10","","0","0.00","Toni");
INSERT INTO racuni VALUES("3","2023-01-18 00:50:09","","0","0.00","Toni");
INSERT INTO racuni VALUES("5","2023-01-18 11:01:53","","0","0.00","Toni");
INSERT INTO racuni VALUES("6","2023-01-18 11:14:02","","0","0.00","Toni");
INSERT INTO racuni VALUES("7","2023-01-18 11:27:42","","0","0.00","Toni");
INSERT INTO racuni VALUES("8","2023-01-18 11:31:30","","0","0.00","Toni");
INSERT INTO racuni VALUES("9","2023-01-18 11:32:44","","20","0.00","Toni");
INSERT INTO racuni VALUES("10","2023-01-18 11:33:56","","20","0.00","Toni");
INSERT INTO racuni VALUES("11","2023-01-18 11:47:59","Diesel","0","0.00","Toni");
INSERT INTO racuni VALUES("12","2023-01-18 12:01:08","Diesel","20","180.00","Toni");
INSERT INTO racuni VALUES("13","2023-01-18 12:02:10","Diesel","0","0.00","Toni");
INSERT INTO racuni VALUES("14","2023-01-18 12:02:53","Diesel","0","0.00","Toni");
INSERT INTO racuni VALUES("15","2023-01-18 12:05:09","Diesel","100","800.00","Toni");
INSERT INTO racuni VALUES("16","2023-01-18 12:06:11","Diesel","30","263.00","Toni");
INSERT INTO racuni VALUES("17","2023-01-18 12:08:01","Diesel","25","219.50","Toni");
INSERT INTO racuni VALUES("18","2023-01-18 12:10:57","2","15","131.70","Toni");
INSERT INTO racuni VALUES("19","2023-01-18 12:11:11","2","15","131.70","Toni");
INSERT INTO racuni VALUES("20","2023-01-18 12:20:47","Diesel","12","105.36","Toni");
INSERT INTO racuni VALUES("21","2023-01-18 12:23:29","Diesel","12","105.36","Toni");
INSERT INTO racuni VALUES("22","2023-01-18 12:25:24","Diesel","11","96.58","Toni");
INSERT INTO racuni VALUES("23","2023-01-18 12:27:35","Benzin","12","105.36","Toni");
INSERT INTO racuni VALUES("24","2023-01-18 12:30:26","Benzin","15","131.70","Toni");
INSERT INTO racuni VALUES("25","2023-01-18 12:31:01","Benzin","15","131.70","Toni");
INSERT INTO racuni VALUES("26","2023-01-18 12:36:25","Benzin","18","158.04","Toni");
INSERT INTO racuni VALUES("27","2023-01-18 12:41:31","Diesel","200","1756.00","Toni");
INSERT INTO racuni VALUES("28","2023-01-18 12:42:17","Diesel","300","2634.00","Toni");
INSERT INTO racuni VALUES("29","2023-01-18 16:15:57","Benzin","100","878.00","Toni");
INSERT INTO racuni VALUES("30","2023-01-20 14:49:21","Benzin","320","2809.60","Toni");
INSERT INTO racuni VALUES("31","2023-01-20 14:49:29","Diesel","20","175.60","Toni");
INSERT INTO racuni VALUES("32","2023-01-20 14:49:37","Benzin","35","307.30","Toni");
INSERT INTO racuni VALUES("33","2023-01-20 14:51:52","Benzin","15","131.70","Toni");
INSERT INTO racuni VALUES("34","2023-01-20 14:51:59","Diesel","115","1009.70","Toni");
INSERT INTO racuni VALUES("35","2023-01-20 17:34:41","Diesel","1000","8780.00","Toni");
INSERT INTO racuni VALUES("36","2023-01-20 17:34:49","Diesel","3000","26340.00","Toni");
INSERT INTO racuni VALUES("37","2023-01-20 17:59:18","Diesel","3000","26340.00","Obiwan");
INSERT INTO racuni VALUES("38","2023-01-20 17:59:46","Benzin","200","1756.00","Obiwan");
INSERT INTO racuni VALUES("39","2023-01-20 17:59:52","Benzin","15","131.70","Obiwan");
INSERT INTO racuni VALUES("40","2023-01-20 17:59:58","Benzin","35","307.30","Obiwan");
INSERT INTO racuni VALUES("41","2023-01-20 19:04:23","Benzin","13","114.14","Obiwan");
INSERT INTO racuni VALUES("42","2023-01-23 01:21:13","Diesel","15","131.70","Toni");
INSERT INTO racuni VALUES("43","2023-01-23 14:07:47","Benzin","2000","17560.00","Obiwan");
INSERT INTO racuni VALUES("44","2023-01-24 15:13:12","Diesel","3000","26340.00","Obiwan");
INSERT INTO racuni VALUES("45","2023-01-24 18:34:50","Diesel","50","439.00","Obiwan");



CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `realName` varchar(255) NOT NULL,
  `realSurname` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `isActive` varchar(255) NOT NULL,
  `isLocked` varchar(255) NOT NULL,
  `activationCode` int(255) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp(),
  `badLogin` int(10) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("34","Toni","Amizic","Toni","toni.amizic@gmail.com","$2y$10$dV5CXm2/NX76ve/1Um47b.MW6HT6q4S.vOytNH5n02A6Gd/Vx7UIS","active","not_locked","5001","0000-00-00","0");
INSERT INTO users VALUES("36","Obiwan","Kenobi","Obiwan","tamizic@yahoo.com","$2y$10$4UeheZHCvmFrAwWwSsLt/uN.2dILtToc/US4Qg2mTURSwLQNUByEa","active","not_locked","8852","0000-00-00","0");
INSERT INTO users VALUES("38","Admin","Admin","Administrator","toni.amizic@aspira.hr","$2y$10$8QrrwtrTtoeFOWy8RJiFROT.JYoZ0j0qeJ9l9SiQoHJkEO/Rojd9.","active","not_locked","7587","0000-00-00","0");
INSERT INTO users VALUES("40","Jabba","Hutt","Jabba","jabba@jabbahutt.com","$2y$10$lhhj7cfKyVYJDqAIQqhQhu3nE1xyHhtfsCEbmq0bBezIKiyasIDpG","not_active","not_locked","3138","0000-00-00","0");
INSERT INTO users VALUES("41","Rocky","Balboa","Rocky","rocky@rocky.com","$2y$10$CqzW1HGKDFy/yNu9GK1/Ae.2CvxlU5pUes9afTzNawDthp5JW1S5i","active","not_locked","8218","2023-01-22","0");
INSERT INTO users VALUES("42","John","Rambo","Rambo","rambo@rambo.com","$2y$10$NYNqzXsfNbdk1HkoqCTbbuv8TxzwZSixO4c0wTdMwFx7i/.MK6Mj.","not_active","locked","1558","2023-01-22","0");
INSERT INTO users VALUES("43","Anakin","Skywalker","Anakin","anakin@anakin.com","$2y$10$yDyMIy95w1Z4fVoHd7.luuqz0BKm1YA1vhh7s.ZKkAsbkVF6L5rbu","not_active","not_locked","2492","2023-01-22","0");
INSERT INTO users VALUES("44","Han","Solo","Han","zinjales@gmail.com","$2y$10$nKNFbCGNH3YM/ydvQsDqN.q6sURSsY48b4jngNZ0y2vWFohzNqTLW","not_active","not_locked","1443","2023-01-22","0");
INSERT INTO users VALUES("45","999999","Amizic","Obrana","roko@roko.hr","$2y$10$gXOh3JbhHka6m4BzyradVOMq1SUWSoa9sW3QkTjsoFrrBlygD.UTW","not_active","locked","2936","2023-01-24","0");

