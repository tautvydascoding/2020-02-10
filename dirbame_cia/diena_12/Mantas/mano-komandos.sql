-- komentaras

-- kursime duomenu baze

CREATE DATABASE hospital2;

gydytojo lenteles kurimas
-- auto_increment

CREATE TABLE pacientai (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name varchar(60) NOT NULL,
    lname varchar (60) NOT NULL,
    doctor_id varchar (15) NOT NULL
);

CREATE TABLE img (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name varchar(60) NOT NULL,
    patient_id varchar (15) NOT NULL
);

INSERT INTO img VALUES (NULL, 'foto1', 3);
INSERT INTO img VALUES (NULL, 'foto2', 4);
INSERT INTO img VALUES (NULL, 'foto3', 3);
INSERT INTO img VALUES (NULL, 'foto4', 1);
INSERT INTO img VALUES (NULL, 'foto5', 1);

INSERT INTO pacientai VALUES (NULL, 'Vim', 'Wogan', 'A1');
INSERT INTO pacientai VALUES (NULL, 'Joy', 'Geg', 'A1');
INSERT INTO pacientai VALUES (NULL, 'She', 'Clay', 'A1');
INSERT INTO pacientai VALUES (NULL, 'Vincent', 'Play', 'A1');
INSERT INTO pacientai VALUES (NULL, 'Mike', 'Dred', 'A1');

DELETE FROM pacientai WHERE id=2

select * from doctors
where lname like '%a' or lname '%e;'

delete from img where id = 5

    update doctros set lname = 'Litaitė'
        where name = 'Lite'

Select *
from doctors
order by lname;

Select *
from doctors
where lname like 'l%';


Select *
from doctors
where name = Kim and lname = Night;

Select *
from doctors
order by name;

Select *
from doctors
where id < 4;

update doctors set name Koris
    where id = 5

SELECT name FROM doctors
where lname = 'Pitas'

SELECT doctors.name, patients.name FROM doctors, pacientai;



-- uzduotis:
-- 0. istrinti paskutine nuotrauka
-- 0. Pakeisti Litos pavarde i Litaitė
-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde
-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3
-- 3. ISVESTI paciantus kuriu vardas is raides "A"

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
