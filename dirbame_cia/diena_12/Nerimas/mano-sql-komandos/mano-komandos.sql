-- komentaras

-- kursime nauja DB hospital2
CREATE DATABASE hospital12;


-- issirenkam DB, kurioje kursime lenteles
use hospital12;
-- show tables; -- test


-- PRIMARY KEY - unikalus
-- AUTO_INCREMENT - automatiskai didejantis;
-- DELETE FROM patients WHERE id = 99
-- LIMIT 1; TRINIMAS
-- SELECT * FROM patients; show columns from doctors;
-- SELECT * FROM doctors
-- where lastname like '%a' OR lastname lastname LIKE "%a";

--  SELECT name FROM doctors
--  WHERE lastname = "Pitas";




-- gydytoju lenteles kurimas

CREATE TABLE doctors (
    ID int      AUTO_INCREMENT        PRIMARY KEY  NOT NULL,
    name varchar(60)        NOT NULL,
    lastname varchar(60)        NOT NULL,
    area varchar(15)        NOT NULL
);
show tables; -- test: matysim doctors Lentele


INSERT INTO doctors
VALUES (NULL, "Tim", "Logan", "A1");
INSERT INTO doctors
VALUES (NULL, "Paul", "Leo", "A3");
INSERT INTO doctors
VALUES (NULL, "Ona", "Onute", "B2");
INSERT INTO doctors
VALUES (NULL, "Lite", "Rene", "Z1");
INSERT INTO doctors
VALUES (NULL, "Koris", "Pitas", "A1");

SELECT * FROM doctors; -- test



CREATE TABLE patients (
    ID int      AUTO_INCREMENT        PRIMARY KEY  NOT NULL,
    name varchar(60)        NOT NULL,
    lastname varchar(60)        NOT NULL,
    doctor_id int        NOT NULL
);
show tables; -- test: matysim doctors Lentele


INSERT INTO patients
VALUES (NULL, "Mark", "John", "2");
INSERT INTO patients
VALUES (NULL, "Tom", "Koris", "2");
INSERT INTO patients
VALUES (NULL, "Aris", "Ted", "1");
INSERT INTO patients
VALUES (NULL, "Tom", "Koris", "3");
INSERT INTO patients
VALUES (NULL, "Co", "Jo", "1");
INSERT INTO patients
VALUES (NULL, "Tom", "Marco", "5");
INSERT INTO patients
VALUES (NULL, "Phil", "Joe", "4");

SELECT * FROM patients; -- test


-- redagavimas:
UPDATE patients SET name="Tom", lastname = 'Koris'
    WHERE id = 2
    LIMIT 1;


    CREATE TABLE img (
        ID int      AUTO_INCREMENT        PRIMARY KEY  NOT NULL,
        name varchar(255)        NOT NULL,
        patient_id int        NOT NULL
    );

    INSERT INTO img
    VALUES (NULL,"foto1.jpg", "3");
    INSERT INTO img
    VALUES (NULL,"222.png", "4");
    INSERT INTO img
    VALUES (NULL,"foto22.gif", "3");
    INSERT INTO img
    VALUES (NULL, "1.jpg", "1");

    SELECT * FROM img; -- test


UPDATE doctors SET lastname = "Litaite"
    WHERE name = "Lite";
    LIMIT 1;


    SELECT * FROM doctors
    ORDER BY lastname;


    SELECT * FROM doctors WHERE id < 3;

    SELECT * FROM patients
    where name like 'a%';


    SELECT * FROM doctors
    WHERE ID BETWEEN 4 AND 5;


SELECT * FROM doctors
WHERE id = 1 or id = 3;

SELECT * FROM doctors
WHERE id<4;

SELECT * FROM doctors
WHERE name != "Ona";


UPDATE doctors SET name = "Litas"
    WHERE name = "Lite";
    LIMIT 1;

    UPDATE doctors SET name ="Makalas"
    WHERE id = 10
    LIMIT 1;


    UPDATE doctors SET lastname ="Paulaitis"
    WHERE id = 7
    LIMIT 1;

    SELECT * FROM doctors
    where lastname like 'L%';

    DELETE FROM doctors WHERE name = "Koris";
        LIMIT 1;

    UPDATE patients SET name = "Karolis"
    WHERE name = "Co";

    UPDATE patients SET name = "Tomas"
    WHERE name = "Tom";


    UPDATE patients 
