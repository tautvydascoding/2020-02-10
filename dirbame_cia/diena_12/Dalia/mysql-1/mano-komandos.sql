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
