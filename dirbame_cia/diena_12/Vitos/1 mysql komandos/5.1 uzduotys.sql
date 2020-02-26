// uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM doctors
    WHERE FirstName = 'Litas';
-- arba

// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

UPDATE patients SET FirstName ='Karolis'
Where id = 5
limit 1;

// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -
 -- varda pakeisti i "Tomas"

 UPDATE patients SET FirstName ='Tomas'
 Where FirstName = 'Tom';

// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -
-- doctor_id pakeisti i "4"

UPDATE patients SET doctorId = 4
Where FirstName LIKE 'T%';

// uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT LastName FROM patients
where FirstName = 'Mark';
