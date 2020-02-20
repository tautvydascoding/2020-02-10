console.log(" as veikiu");

// sukurimas 1 budas
var masyvas = [] //tuscias masyvas (array)
//sukurimas 2 budas
var masyvas2 = ['Goda', 21, 'staklininke'];


//pakeitimai Godos amziu
masyvas2[1]++; //geresnis budas
masyvas2[1] = 22; //prastesnis budas (stenkites isvis nenaudoti skaiciu)
console.log( masyvas2 ); //viso masyvo isvedimas
// masyvas2 = "Antanas"; //viena dazniausiu Junior klaidu
let tekstas = masyvas2[0] + " " + masyvas2[2];
document.querySelector('body').innerHTML += tekstas;
