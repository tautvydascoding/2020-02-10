1. index.php faile sukurti HTML form'a naudojant metoda (GET)
 ir  su ivedimo laukais (ivedimo laukams nustatyti name='vardas...'):
 vardas, pavarde, telefonas, mygtukas 'registruotis'

2. kai paspaudzia 'registruotis',
 vartotoja perkelti i registracija.php faila
 (formoje action='registracija.php')

3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti
vartotojo ivestu duomenis
pvz.:
print_r( $_GET);

// PASIBANDYTI PAPILDOMAI
pvz.: print_r( $GLOBALS)



// UZDUOTIS
// pasisveikinti su katik uzsiregistravusius zmogumi ir
// graziai atspausdinti uzsiregistravusio zmoguas duomenis
