-- komentaras

-- kursime nauja DB hospital2
CREATE DATABASE hospital2;
-- pasitikrinti
show databases;

-- !!! issirenkam DB , kurioje kursime lenteles
use hospital2;
show tables; -- test : turim nieko nematyti, nes dar nieko nesukurem



-- gydytoju lenteles kurimas
--  PRIMARY KEY - unikalus
-- AUTO_INCREMENT - automatiskai didejantis
CREATE TABLE doctors (
    id int  AUTO_INCREMENT      PRIMARY KEY    NOT NULL,
    name varchar(60)     NOT NULL,
    lname varchar(60)     NOT NULL,
    area varchar(15)     NOT NULL
);
SHOW COLUMNS FROM doctors;
show tables; -- test :  matysim doctors lentele

INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan', 'A1');

INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo', 'A3');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute', 'B2');
INSERT INTO doctors VALUES (NULL, 'Lite', 'Rene', 'Z1');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pitas', 'A1');
SELECT * FROM doctors; -- test


-- pacientu lenteles kurimas
--  PRIMARY KEY - unikalus
-- AUTO_INCREMENT - automatiskai didejantis
CREATE TABLE patients (
    id int  AUTO_INCREMENT      PRIMARY KEY    NOT NULL,
    name varchar(60)     NOT NULL,
    lname varchar(60)     NOT NULL,
    doctor_id int    NOT NULL
);
SHOW COLUMNS FROM patients;
show tables; -- test :  matysim doctors lentele

INSERT INTO patients VALUES (NULL, 'Mark', 'John', 2);
SELECT * FROM patients; --test
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Tiedo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Koris', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'Jo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jili', 'Joli', 4);
SELECT * FROM patients; --test
--

--redagavimas:
-- pacientu lenteleje ieskome eilutes '2', tada pakeiciam varda ir pavarde

UPDATE patients SET name='Tom', lname ='Karlos'
                WHERE id = 2
                LIMIT 1;
SELECT * FROM patients; --test--

DELETE FROM patients WHERE id = 99
                     LIMIT 1;
SELECT * FROM patients; --test--
show columns from doctors;

--  paieska
SELECT * FROM doctors
         WHERE lname LIKE '%a' OR lname LIKE '%e';


SELECT name FROM doctors
            WHERE lname = 'Pitas';

-- isvesti is dvieju lenteliu vardus
SELECT  doctors.name, patients.name FROM doctors, patients;

--
-- uzduotis:
-- 0. istrinti paskutine nuotrauka
DELETE FROM img WHERE id = 5
                LIMIT 1;
-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors SET lname = 'Litaitė'
                WHERE  name = 'Lite'
                LIMIT 1;
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors ORDER BY lname;
SELECT * FROM doctors ORDER BY lname DESC;
SELECT * FROM doctors ORDER BY lname ASC;

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- WHERE < > =  ==    <> != AND  OR NOT
SELECT * FROM doctors WHERE id < 3;
-- 3. ISVESTI paciantus kuriu vardas is raides "A"

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id > 3 AND id < 6;
SELECT * FROM doctors WHERE id = 4 OR id = 5;
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus,
-- kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = 'Tim' OR lname = 'Leo';

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors WHERE  NOT name ='Ona';
SELECT * FROM doctors WHERE    name != 'Ona';
SELECT * FROM doctors WHERE    name <> 'Ona';
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients ORDER BY name;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name = 'Litas'
                WHERE name ='Lite'
                LIMIT 1;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lname = 'Makalas'
                WHERE name ='Koris'
                LIMIT 1;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
