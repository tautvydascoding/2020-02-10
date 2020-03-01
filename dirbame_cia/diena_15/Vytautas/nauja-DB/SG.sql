-- komentaras

-- kursime nauja DB hospital2
CREATE DATABASE sapnu_gaudykles;
-- pasitikrinti
show databases;

-- issirenkam duomenu baze, kurioje kursime lenteles
use sapnu_gaudykles;
-- show tables; turim nieko nematyt

-- gydytoju lenteles kurimas
-- PRIMARY KEY - unikalus
-- AUTO_INCREMENT - automatiskai didejantis
--int-sveikas skaicius
CREATE TABLE sapnu_gaudykles (
    id int AUTO_INCREMENT   PRIMARY KEY   NOT NULL,
    dydis varchar(60)   NOT NULL,
    spalva varchar(60)   NOT NULL,
    kaina varchar(15)   NOT NULL
);
show tables; -- matysim doctor lentele

INSERT INTO sapnu_gaudykles VALUES (NULL, 50, 'balta', 30);
INSERT INTO sapnu_gaudykles VALUES (NULL, 45, 'balta', 28);
INSERT INTO sapnu_gaudykles VALUES (NULL, 40, 'balta', 26);
INSERT INTO sapnu_gaudykles VALUES (NULL, 35, 'balta', 24);
INSERT INTO sapnu_gaudykles VALUES (NULL, 30, 'balta', 22);
INSERT INTO sapnu_gaudykles VALUES (NULL, 25, 'balta', 20);
INSERT INTO sapnu_gaudykles VALUES (NULL, 20, 'balta', 18);
INSERT INTO sapnu_gaudykles VALUES (NULL, 15, 'balta', 16);
SELECT * FROM sapnu_gaudykles; --test


-- sukuriam Patients elementus
CREATE TABLE Patients (
    id int AUTO_INCREMENT   PRIMARY KEY   NOT NULL,
    name varchar(60)   NOT NULL,
    Lname varchar(60)   NOT NULL,
    doctor_id int (15)   NOT NULL
);
INSERT INTO Patients VALUES (NULL, 'Mark', 'John', 2);
INSERT INTO Patients VALUES (NULL, 'Tom', 'Karlas', 2);
INSERT INTO Patients VALUES (NULL, 'Aris', 'Tiedo', 1);
INSERT INTO Patients VALUES (NULL, 'Tom', 'Kori', 3);
INSERT INTO Patients VALUES (NULL, 'Co', 'Jo', 1);
INSERT INTO Patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO Patients VALUES (NULL, 'Jili', 'Joli', 4);
SELECT * FROM Patients; --test



CREATE TABLE Img (
    id int AUTO_INCREMENT   PRIMARY KEY   NOT NULL,
    name varchar(60)   NOT NULL,
    doctor_id int (15)   NOT NULL
);
INSERT INTO Img VALUES (NULL, 'foto1.jpg', 3);
INSERT INTO Img VALUES (NULL, 'zzzz.png', 4);
INSERT INTO Img VALUES (NULL, 'fotozz.gif', 3);
INSERT INTO Img VALUES (NULL, '1.jpg', 1);
SELECT * FROM Patients; --test


-- paieska
SELECT * FROM Doctors
        WHERE lname LIKE '%a' OR lname LIKE '%e';


-- isvesti is dvieju lenteliu vardus
SELECT doctors.name, patients.name FROM doctors, patients;


-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM Img WHERE id = 5
                LIMIT 1;

-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE Doctors SET lname = 'Litaite'
                WHERE name = 'Lite'
                LIMIT 1;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM Doctors
ORDER BY lname ASC;
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM Doctors
WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM Patients
WHERE name LIKE 'a%';

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM Doctors
WHERE id = 4 OR id = 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas:
-- 'Tim' ARBA pavarde 'Leo'
SELECT * FROM Doctors
WHERE name = 'Tim' OR lname = 'Leo';
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM Doctors
WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM Doctors
WHERE NOT name = "Ona";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM Patients
ORDER BY name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE Doctors SET name = 'Litas'
                WHERE name = 'Lite'
                LIMIT 1;


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE Patients
SET lname = 'Makalas'
WHERE id = 4;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE Patients
SET lname='Paulaitis'
WHERE id='4';
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is
-- "L" raides
SELECT * FROM Doctors
        WHERE lname LIKE 'L%';


        -- // uzduotis 1: istrinti gydytoja "Koris"
        DELETE FROM Doctors WHERE id = 5
                            LIMIT 1;
        -- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
        UPDATE Patients
        SET name = 'Karolis'
        WHERE id = 5;
        -- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda
        -- pakeisti i "Tomas"
        UPDATE Patients SET name = 'Tomas'
                        WHERE name = 'Tom';
        -- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id
        -- pakeisti i "4"
        UPDATE Patients SET doctor_id = 4
        WHERE name LIKE 'T%';
        -- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
        --
        --
        -- DELETE FROM doctors WHERE name = "Koris"
        --
        -- SELECT * FROM doctors, patients
        --     WHERE doctors.lname Like "L%"    -- isveda
        --
        -- //
