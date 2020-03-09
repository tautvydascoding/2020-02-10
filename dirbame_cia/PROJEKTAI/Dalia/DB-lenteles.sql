-- komentaras

CREATE DATABASE parduotuve;

show databases;

use parduotuve;

    CREATE TABLE pardavejai (
        id int AUTO_INCREMENT  PRIMARY KEY NOT NULL,
        name varchar(60) NOT NULL,
        lname varchar (60)NOT NULL,
        prekes varchar (15)NOT NULL
    );
INSERT INTO pardavejai VALUES (NULL,'Jonas', 'Jonaitis','Televizoriai');
INSERT INTO pardavejai VALUES (NULL,'Petras', 'Petraitis','Kompiuteriai');
INSERT INTO pardavejai VALUES (NULL,'Arunas', 'Grazuoliunas','Skalbykles');
INSERT INTO pardavejai VALUES (NULL,'Birute', 'Leitaite','Dziovintuvai');
INSERT INTO pardavejai VALUES (NULL,'Irute', 'Juskaite','Masazuokliai');


SELECT * FROM pardavejai;

CREATE TABLE televizoriai (
    id    int          PRIMARY KEY     AUTO_INCREMENT,
    name  varchar(40) NOT NULL,
    description  varchar(200) NOT NULL,
    price int,
    discount int,
    seller_id int
);
INSERT INTO televizoriai VALUES (NULL, 'Sony', 'Didelis grazus televizorius, istrizaine 100', 300, 20, 1);
INSERT INTO televizoriai VALUES (NULL, 'Samsung', 'Baltas televizorius, istrizaine 150', 250, 25, 1);
INSERT INTO televizoriai VALUES (NULL, 'Philips', 'Blizgantis televizorius, istrizaine 120', 200, 15, 1);
-- test
SELECT * FROM televizoriai;

CREATE TABLE kompiuteriai (
    id    int          PRIMARY KEY     AUTO_INCREMENT,
    name  varchar(40) NOT NULL,
    description  varchar(200) NOT NULL,
    price int,
    discount int,
    seller_id int
);
INSERT INTO kompiuteriai VALUES (NULL, 'Apple', 'Nesiojamas kompiuteris, istrizaine 13', 1000, 10, 2);
INSERT INTO kompiuteriai VALUES (NULL, 'Lenovo', 'Nesiojamas kompiuteris, istrizaine 15', 500, 15, 2);
INSERT INTO kompiuteriai VALUES (NULL, 'Asus', 'Nesiojamas kompiuteris, istrizaine 18', 600, 25, 2);


CREATE TABLE skalbykles (
    id    int          PRIMARY KEY     AUTO_INCREMENT,
    name  varchar(40) NOT NULL,
    description  varchar(200) NOT NULL,
    price int,
    discount int,
    seller_id int
);
INSERT INTO skalbykles VALUES (NULL, 'Bosh', 'Skalbykles aprasymas pirmas', 600, 10, 2);
INSERT INTO skalbykles VALUES (NULL, 'Philips', 'Skalbykles aprasymas antras', 550, 15, 2);
INSERT INTO skalbykles VALUES (NULL, 'AEG', 'Skalbykles aprasymas trecias', 650, 25, 2);

CREATE TABLE prekes (
    id    int          PRIMARY KEY     AUTO_INCREMENT,
    category varchar(40) NOT NULL,
    name  varchar(40) NOT NULL,
    description  varchar(200) NOT NULL,
    price int,
    discount int,
    seller_id int
);
INSERT INTO prekes VALUES (NULL, 'Skalbykle','Bosh' 'Skalbykles aprasymas pirmas', 600, 10, 2);
INSERT INTO prekes VALUES (NULL, 'Skalbykle','Philips', 'Skalbykles aprasymas antras', 550, 15, 2);
INSERT INTO prekes VALUES (NULL, 'Skalbykle','AEG', 'Skalbykles aprasymas trecias', 650, 25, 2);
INSERT INTO prekes VALUES (NULL, 'Kompiuteris','Apple', 'Nesiojamas kompiuteris, istrizaine 13', 1000, 10, 2);
INSERT INTO prekes VALUES (NULL, 'Kompiuteris','Lenovo', 'Nesiojamas kompiuteris, istrizaine 15', 500, 15, 2);
INSERT INTO prekes VALUES (NULL, 'Kompiuteris','Asus', 'Nesiojamas kompiuteris, istrizaine 18', 600, 25, 2);
INSERT INTO prekes VALUES (NULL, 'Televizorius','Sony', 'Didelis grazus televizorius, istrizaine 100', 300, 20, 1);
INSERT INTO prekes VALUES (NULL, 'Televizorius','Samsung', 'Baltas televizorius, istrizaine 150', 250, 25, 1);
INSERT INTO prekes VALUES (NULL, 'Televizorius', 'Philips', 'Blizgantis televizorius, istrizaine 120', 200, 15, 1);
