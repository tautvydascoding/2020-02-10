-- komentaras

CREATE DATABASE medienos;

show databases;

use medienos;

show tables;


CREATE TABLE kontaktai (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    adresas varchar(80) NOT NULL,
    miestas varchar(60) NOT NULL,
    kodas varchar (10) NOT NULL,
    telef varchar(20) NOT NULL,
    elpastas varchar(40) NOT NULL
);

show tables;

INSERT INTO kontaktai VALUES (NULL, 'Saules g. 14', 'Vilnius', '32456', '+370-656-12345', 'saules@mail.lt');
INSERT INTO kontaktai VALUES (NULL, 'Ryto g. 8', 'Klaipeda', '23765', '+370-656-43572', 'ryto@mail.lt');
INSERT INTO kontaktai VALUES (NULL, 'Ausros g. 22', 'Siauliai', '45324', '+370-656-34563', 'ausros@mail.lt');


-- rodo viena stulpeli
SELECT miestas FROM kontaktai;


-- rodo visas lenteles eilutes
SELECT * FROM kontaktai;


CREATE TABLE meistrai (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    vardas varchar(40) NOT NULL,
    pavarde varchar(80) NOT NULL,
    patirtis varchar(300) NOT NULL,
    gaminiai varchar(50) NOT NULL
);

INSERT INTO meistrai VALUES (NULL, 'Jonas', 'Jonaitis', 'Darbas mediniu baldu gamybos srityje', 'JJ');
INSERT INTO meistrai VALUES (NULL, 'Linas', 'Linaitis', 'Stalius su ilgamete patirtimi', 'LL');


CREATE TABLE gaminiai (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    preke varchar(40) NOT NULL,
    aprasas varchar(100) NOT NULL,
    dydis varchar(30) NOT NULL,
    kaina int (10) NOT NULL,
    meistro varchar(20) NOT NULL,
    foto varchar(50) NOT NULL
);

INSERT INTO gaminiai VALUES (NULL, 'kede-11', 'kede su apvaliu virsumi', '65cm', '20', 'JJ','img1.jpg');
INSERT INTO gaminiai VALUES (NULL, 'kede-11', 'kede su apvaliu virsumi', '65cm', '20', 'JJ','img2.jpg');
INSERT INTO gaminiai VALUES (NULL, 'stalas-23', 'stalas su stalvirsiu apvaliais kampais', '120cm', '120', 'LL','img3.jpg');
INSERT INTO gaminiai VALUES (NULL, 'stalas-12', 'lauko stalas apvalus', '120cm', '120', 'LL','img4.jpg');
INSERT INTO gaminiai VALUES (NULL, 'kreslas-1', 'kreslas su porankiais', '120cm', '90', 'LL','img5.jpg');
INSERT INTO gaminiai VALUES (NULL, 'kreslas-7', 'supamas kreslas su porankiais', '100cm', '120', 'LL','img6.jpg');

CREATE TABLE apiemus (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    mintis varchar(400) NOT NULL
);

INSERT INTO apiemus VALUES (NULL, 'Mes esame imone dirbanti Lietuvos rinkoje jau 20 metu.');
INSERT INTO apiemus VALUES (NULL, 'Musu meistru komanda turi ilgamete darbo patirti.');


INSERT INTO nuotraukos VALUES (NULL, '1', 'kede', 'pav3.jpg');
INSERT INTO nuotraukos VALUES (NULL, '2', 'fotelis', 'pav1.jpg');
INSERT INTO nuotraukos VALUES (NULL, '3', 'stalas', 'pav5.jpg');
INSERT INTO nuotraukos VALUES (NULL, '4', 'komoda', 'pav7.jpg');
INSERT INTO nuotraukos VALUES (NULL, '4', 'fotelis', 'pav6.jpg');
INSERT INTO nuotraukos VALUES (NULL, '2', 'fotelis', 'pav5.jpg');
INSERT INTO nuotraukos VALUES (NULL, '3', 'fotelis', 'pav4.jpg');
INSERT INTO nuotraukos VALUES (NULL, '2', 'fotelis', 'pav7.jpg');
INSERT INTO nuotraukos VALUES (NULL, '1', 'fotelis', 'pav2.jpg');
INSERT INTO nuotraukos VALUES (NULL, '1', 'fotelis', 'pav3.jpg');
INSERT INTO nuotraukos VALUES (NULL, '1', 'fotelis', 'pav4.jpg');

--
-- -- update - papildyti lenteles
--
-- INSERT INTO patients VALUES (NULL, 'Co', 'Ju', 1);
-- INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
-- INSERT INTO patients VALUES (NULL, 'Jil', 'Joli', 1);
--
-- -- Redagavimas - galima keisti kelias reiksmes
-- UPDATE patients SET lastname='Karlos'
-- Where id = 2
-- limit 1;
--
--
-- -- trinimas (klaida???)
-- DELETE patients WHERE id = 2
--                 LIMIT 1;
--
--
-- -- paieskos  - like
-- SELECT * FROM doctors
--     WHERE lastname LIKE '%e';
--
-- SELECT FirstName FROM doctors
--     WHERE lastname = 'Pitas';
--
-- show columns FROM doctors;
--
-- -- sujungti lenteliu duomenis
-- -- SELECT column_name(s)
-- -- FROM table1
-- -- INNER JOIN table2
-- -- ON table1.column_name = table2.column_name;
--
-- SELECT doctors.lastname
-- FROM doctors
-- INNER JOIN patients
-- ON doctors.id = patients.doctorId;
--
--
--
-- -- nuotraukos
-- CREATE TABLE patients (
--     id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
--     FirstName varchar(40) NOT NULL,
--     LastName varchar(80) NOT NULL,
--     doctorId int
-- );
