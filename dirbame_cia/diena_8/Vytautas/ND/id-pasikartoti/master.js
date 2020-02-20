console.log(" as veikiu");


// 3 UZDUOTIS

// 1) // sukurti kintamuosius:
 // arRodyti =   (galimi variantai true/ false)
 // vartotojoTipas =   "admin";
 // userName = "Tomas";

let arRodyti = true;
let arRodyti1 = false;
let vartotojoTipas = 'admin';
let userName = "Tomas";
let img = document.createElement("img");
img.src = "http://www.google.com/intl/en_com/images/logo_plain.png";


// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :
 // jeigu true isvestu : Labas Tomai
// jeigu false isvestu : Sveiki

if (arRodyti==true) {
document.querySelector('body').innerHTML = 'Labas' + ' ' + userName + '<br>';
}else {
    document.querySelector('body').innerHTML += 'Sveiki' + '<br>'
}

//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima,
// bet ir koki nors paveiksliuka
if (vartotojoTipas==admin) {
document.querySelector('body').innerHTML = 'Labas' + ' ' + img + '<br>'
}
