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
show tables; -- test :  matysim doctors lentele

INSERT INTO doctors VALUES (NULL, 'Tim', 'Logan', 'A1');

INSERT INTO doctors VALUES (NULL, 'Paul', 'Leo', 'A3');
INSERT INTO doctors VALUES (NULL, 'Ona', 'Onute', 'B2');
INSERT INTO doctors VALUES (NULL, 'Lite', 'Rene', 'Z1');
INSERT INTO doctors VALUES (NULL, 'Koris', 'Pitas', 'A1');
SELECT * FROM doctors; -- test





--
