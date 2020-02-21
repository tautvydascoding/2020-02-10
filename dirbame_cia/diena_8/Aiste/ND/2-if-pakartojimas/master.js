console.log("labas");

// 1) // sukurti kintamuosius:
//  arRodyti =   (galimi variantai true/ false)
arRodyti = (true/ false);
// vartotojoTipas =   "admin";
vartotojoTipas =   "admin";
// userName = "Tomas";
userName = "Tomas";

// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu true isvestu : Labas Tomai 
// jeigu false isvestu : Sveiki

if (arRodyti = true) {
    console.log("labas " + userName );
} else if (arRodyti = false) {
    console.log("Sveiki ");
}

//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka 

if (vartotojoTipas ="admin") {
    console.log("labas " + userName );
    document.querySelector("body").innerHTML += "labas " + userName  + '<img src="balionas.png" alt="">';
} else {
    console.log("Viso gero");
}