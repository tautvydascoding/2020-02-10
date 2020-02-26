
-- ` -  db/tables  pavadinimams
-- tokios kabutes ` naudojamos senesniuose dokuose. tik pavadinimams lentelius arba DB

-- '  - tekstui/reikmems/values

-- "" - tekstui/reikmems/values



-- geriau pirma cia programuoti, ir po to copy paste i terminala mysql.exe


--  kursime nauja DB hospital2

CREATE DATABASE hospital2;

-- pasitikrinti
--  show databases;



-- issirenkam DB, kurioje kursime lenteles
use hospital2;


SHOW TABELS; -- TEST -- turi nieko nerodyti, nes dar nikeo nesukurem



--  gydytoju lenteles kurimas
-- int - sveikas ksiacius
--  primaty key - unikalus
--  AUTO_INCREMENT - automatiskai didejantis

CREATE TABLE doctors (
    id int  AUTO_INCREMENT PRIMARY KEY    NOT NULL,
    name varchar(60)  NOT NULL,
    lname varchar(60)  NOT NULL,
    area varchar(15)  NOT NULL
);

SHOW TABELS; -- TEST -- turi nieko nerodyti, nes dar nikeo nesukurem


-- info idejimas i lentele
INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan', 'A1');

SELECT * FROM doctors; -- TEST


INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo', 'A3');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute', 'B1');
INSERT INTO doctors VALUES (NULL, 'Lite', 'Rene', 'Z1');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pitas', 'A1');
SELECT * FROM doctors; -- TEST





CREATE TABLE patients (
    id int  AUTO_INCREMENT PRIMARY KEY    NOT NULL,
    name varchar(60)  NOT NULL,
    lname varchar(60)  NOT NULL,
    doctor_id int  NOT NULL
);
SHOW TABELS; -- TEST

INSERT INTO patients VALUES (NULL, 'Mark', 'John', 2);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Tiedo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Kor', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'Jo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Karo', 5);
INSERT INTO patients VALUES (NULL, 'Jil', 'Joli', 4);
SELECT * FROM patients; -- TEST



CREATE TABLE img (
    id int  AUTO_INCREMENT PRIMARY KEY    NOT NULL,
    name varchar(255)  NOT NULL,
    patient_id int  NOT NULL
);

SHOW TABELS; -- TEST

INSERT INTO img VALUES (NULL, '1.jpg', 3);
INSERT INTO img VALUES (NULL, '2.jpg', 4);
INSERT INTO img VALUES (NULL, '3.jpg', 3);
INSERT INTO img VALUES (NULL, '4.jpg', 1);

SELECT * FROM img; -- TEST


-- modifikavimas
ALTER TABLE patients
MODIFY COLUMN doctor_id int;



--  redagavimas
UPDATE patients SET name='Tom', lname='Karlosi'
WHERE id = 8
LIMIT 1;


-- istrina visa lentele
DROP TABLE patients;
SHOW TABELS; -- TEST




-- istrina kazka 
DELETE FROM patients WHERE id = 2 LIMIT 1;
SELECT * FROM patients; -- TEST



-- LIKE funkcija - iesko
SELECT * FROM doctors
WHERE name LIKE '%m' OR lname LIKE '%e';



-- paieska
SELECT name FROM doctors
WHERE lname = 'Pitas';


-- isvesti is dvieju lenteliu vardus
SELECT doctors.name, patients.name FROM doctors, patients;


-- parodo visa column su visa info
show columns FROM doctors;



-- dvieju lenteliu susiejimas
INNER JOIN

SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON doctors.id = patients.doctor_id
WHERE patients.lname = "John";



-- UZDUOTYS


-- 0. istrinti paskutine nuotrauka
DELETE FROM img WHERE id = 4 LIMIT 1;
SELECT * FROM img; -- TEST



-- 0. Pakeisti Litos pavarde i Litaitė
UPDATE doctors SET name='Lite', lname='Litaite'
WHERE id = 4
LIMIT 1;
SELECT * FROM doctors;


-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
SELECT * FROM doctors
ORDER BY lname;


-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
SELECT * FROM doctors
WHERE doctors.id<3;


-- 3. ISVESTI paciantus kuriu vardas is raides "A"
SELECT * FROM patients
WHERE name LIKE 'a%';


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors
WHERE doctors.id BETWEEN 4 AND 5;


-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors
WHERE name LIKE 'Tim' OR lname LIKE 'Leo';


-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors
WHERE doctors.id<4;


-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
WHERE NOT name='Ona';


-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients
ORDER BY name;


-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name='Litas', lname='Litas'
WHERE id = 4
LIMIT 1;
SELECT * FROM doctors;


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE patients SET  lname='Makalas'
WHERE lname='Karo'
LIMIT 1;
SELECT * FROM patients;


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE patients SET  lname='Paulaitis'
WHERE lname='Tiedo'
LIMIT 1;
SELECT * FROM patients;

-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors
WHERE lname LIKE 'l%';


-- uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors WHERE id = 5 LIMIT 1;
SELECT * FROM doctors;


-- uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients SET  name='Karolis'
WHERE name='Co'
LIMIT 1;
SELECT * FROM patients;

-- uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET  name='Tomas'
WHERE name='Tom';
SELECT * FROM patients;


-- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET  doctor_id=4
WHERE name LIKE'T%';
SELECT * FROM patients;



-- uzduotis 4: gauti paciento "Mark" daktaro pavarde

-- NEGERAI
-- SELECT * FROM doctors
-- WHERE patients.name='Mark';

-- NEGERAI
-- SELECT * FROM patients
-- WHERE name LIKE 'Mark';

SELECT doctors.lname
FROM doctors
INNER JOIN patients
ON patients.doctor_id = doctors.id -- reikia prilyginti ID su ID nes kitaip neras. o SELECT paraso pavarde
WHERE patients.name = 'Mark';



-- DELETE FROM doctors WHERE name = "Koris"

-- SELECT * FROM doctors, patients
-- WHERE doctors.lname Like "L%"    -- isveda