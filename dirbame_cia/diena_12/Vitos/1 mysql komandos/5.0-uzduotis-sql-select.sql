-- uzduotis:
-- 0. istrinti paskutine nuotrauka


-- 0. Pakeisti Litos pavarde i Litaitė

UPDATE doctors SET LastName='Litaite'
Where FirstName = "Lite"
limit 1;

SELECT * FROM doctors;

-- 1. ISVESTI SURIKIUOTUS GYTYTOJUS PAGAL pavarde

SELECT * FROM doctors
ORDER BY LastName ASC;
-- arba --
SELECT LastName
FROM doctors
ORDER BY LastName ASC;

SELECT * FROM doctors;

-- 2. ISVESTI GYTYTOJUS kuriu id mazesnis uz 3

SELECT * FROM doctors
where id < 3;

-- 3. ISVESTI paciantus kuriu vardas is raides "A"

SELECT * FROM doctors
WHERE FirstName LIKE 'T%';

SELECT * FROM patients
WHERE FirstName LIKE 'A%';

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

SELECT * FROM doctors
where id > 3;
-- arba --
SELECT * FROM doctors
where id = 4 or id = 5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus,
 -- kuriu vardas: 'Tim' ARBA pavarde 'Leo'

SELECT * FROM doctors
where FirstName = 'Tim' or LastName = 'Leo';

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus,
-- kuriu 'id' mazesnis uz 4

SELECT * FROM doctors
where id < 4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus,
-- bet ne 'Ona'

-- SELECT * FROM doctors
-- EXCEPT
-- SELECT FirstName = 'Ona' FROM doctors;

SELECT * FROM doctors
WHERE FirstName <> 'Ona';

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus,
-- surikiuotus pagal varda

SELECT * FROM patients
ORDER BY FirstName ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

UPDATE doctors SET FirstName ='Litas'
Where LastName = "Litaite"
limit 1;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas
-- (suradus pagal id)

UPDATE doctors SET FirstName ='Makalas'
Where id = 5
limit 1;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis
-- (suradus pagal id ir pavarde)

UPDATE doctors SET LastName ='Paulaitis'
Where id = 5 and LastName = 'Pitas'
limit 1;

-- UZDUOTIS (select LIKE)- paimti visus gydytojus,
-- kuriu pavarde parsideda is "L" raides

SELECT * FROM doctors
WHERE LastName LIKE 'L%';
