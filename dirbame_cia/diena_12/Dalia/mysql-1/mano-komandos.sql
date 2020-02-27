-- komentaras

CREATE DATABASE hospital2;

show databases;

use hospital2;

    CREATE TABLE doctors (
        id int AUTO_INCREMENT  PRIMARY KEY NOT NULL,
        name varchar(60) NOT NULL,
        lname varchar (60)NOT NULL,
        area varchar (15)NOT NULL
    );
INSERT INTO doctors VALUES (NULL,'Tim', 'Logan','A1');

INSERT INTO doctors VALUES (NULL,'Paul', 'Leo','A3');

INSERT INTO doctors VALUES (NULL,'Olga', 'Bobo','B1');

INSERT INTO doctors VALUES (NULL,'Lite', 'Rene','Z1');

INSERT INTO doctors VALUES (NULL,'Koris', 'Pitas','A1');
SELECT * FROM doctors;

CREATE TABLE patients (
    id    int          PRIMARY KEY     AUTO_INCREMENT,
    name  varchar(40) NOT NULL,
    lname varchar(40) NOT NULL,
    doctor_id int
);
INSERT INTO patients VALUES (NULL, 'Mark',  'John', 2);
-- test
SELECT * FROM patients;


INSERT INTO patients VALUES (NULL, 'Tom',  'Karlos', 2);
INSERT INTO patients VALUES (NULL, 'Aris',  'Tiedo', 1);
INSERT INTO patients VALUES (NULL, 'Tom',   'Kori', 3);
INSERT INTO patients VALUES (NULL, 'Co',   'Jo', 1);
INSERT INTO patients VALUES (NULL, 'Tom',   'Naro', 5);
INSERT INTO patients VALUES (NULL, 'Jili',   'Jola', 4);
