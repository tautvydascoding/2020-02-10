-- komentaras

CREATE DATABASE hospital2;

show databases;


use hospital2;

show tables;


CREATE TABLE doctors (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FirstName varchar(40) NOT NULL,
    LastName varchar(80) NOT NULL,
    area varchar(30) NOT NULL
);

show tables;

INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan', 'A1');

-- rodo viena eilute
SELECT * FROM doctors;

INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo', 'A3');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onutaite', 'B1');
INSERT INTO doctors VALUES (NULL, 'Lite', 'Rene', 'Z1');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pitas', 'A1');

-- rodo visas lenteles eilutes
SELECT * FROM doctors;

CREATE TABLE patients (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FirstName varchar(40) NOT NULL,
    LastName varchar(80) NOT NULL,
    doctorId varchar(30) NOT NULL
);

-- alter - redaguoti lenteles
ALTER TABLE patients
MODIFY COLUMN doctorId int;

-- update - papildyti lenteles

INSERT INTO patients VALUES (NULL, 'Mark', 'John', 2);
INSERT INTO patients VALUES (NULL, 'Tom', 'Koris', 2);
INSERT INTO patients VALUES (NULL, 'Aris', 'Tiedo', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Koris', 3);
INSERT INTO patients VALUES (NULL, 'Co', 'Ju', 1);
INSERT INTO patients VALUES (NULL, 'Tom', 'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jil', 'Joli', 1);

-- Redagavimas - galima keisti kelias reiksmes
UPDATE patients SET lastname='Karlos'
Where id = 2
limit 1;


-- trinimas (klaida???)
DELETE patients WHERE id = 2
                LIMIT 1;


-- paieskos  - like
SELECT * FROM doctors
    WHERE lastname LIKE '%e';

SELECT FirstName FROM doctors
    WHERE lastname = 'Pitas';

show columns FROM doctors;

-- sujungti lenteliu duomenis
-- SELECT column_name(s)
-- FROM table1
-- INNER JOIN table2
-- ON table1.column_name = table2.column_name;

SELECT doctors.lastname
FROM doctors
INNER JOIN patients
ON doctors.id = patients.doctorId;



-- nuotraukos
CREATE TABLE patients (
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FirstName varchar(40) NOT NULL,
    LastName varchar(80) NOT NULL,
    doctorId int
);
