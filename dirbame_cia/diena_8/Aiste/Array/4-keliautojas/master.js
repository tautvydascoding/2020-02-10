console.log("array - testuojam ")



// -------- --Array / Masyvai  Methods (~2h)----------



// mas.toString ( ); ----- pavercia i teksta visa mazyva
// man.join(); -------- pavers i teksta visa mas
// 




// ========== LENGHT ==========================================
console.log("-----------LENGHT-----------");

let keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
console.log(keliautojas.length);


document.querySelector("body").innerHTML += "masyvo ilgis " + keliautojas.length + "<br>";


// ========== JOIN ==========================================
console.log("-----------JOIN-----------");

console.log(keliautojas.join(' ## '));

console.log(keliautojas.join());

console.log(keliautojas.join("    "));

console.log(keliautojas.join("----"));

// document.querySelector("body").innerHTML += keliautojas.toString + "<br>";

// ========== POP =============================================
console.log("-----------POP-----------");

keliautojas.pop();

console.log(keliautojas);


// ========== PUSH =============================================
console.log("-----------PUSH-----------");

keliautojas.push("butelis vandens");
console.log(keliautojas); //  i masyvo gala ideti elmenta



// ======== UNSHIFT ========================================
console.log("-----------UNSHIFT-----------");

keliautojas.unshift("pompa"); // ideda i pradzia

console.log(keliautojas);

document.querySelector("body").innerHTML += "masyvas visas " + keliautojas + "<br>";



// ======== DELETE ===========================================
console.log("-----------DELETE-----------");

delete keliautojas[2];
console.log(keliautojas);  // stalcius lieka empty



// ========= SHIFT ============================================
console.log("-----------SHIFT-----------");

keliautojas.shift(); // istrina pirma elementa is stalciu
console.log(keliautojas);



// ========= SPLICE ===========================================
console.log("-----------SPLICE-----------");

//  nuo kelinto, kiek istrinti, ka iterpti

console.log("splice - iterpimas"); // iterpimas

keliautojas.splice(2, 0, "irklai", "saldainiai");
console.log( keliautojas ); // -2- nuo kelinto stalciaus


console.log("splice - trinimas"); // trinimas

keliautojas.splice(2, 1   );
console.log( keliautojas ); // -1- istrina viena stalciu


console.log("splice - sukeitimas"); // sukeitimas

keliautojas.splice(2, 1, "sumustiniai", " morkos"  );
console.log( keliautojas ); // nuo kelinti -2- , kiek istrina -1-. ideda du


// =========== CONCAT =========================================

let names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];


console.log("----------------CONCAT--------------");

let visiMasyvai = keliautojas.concat(names);

console.log(visiMasyvai);



console.log(names);

console.log("-----------names pratimas-----------");

// .length
console.log(names.length);

// .join() ("") ("-")  ------ isvardina elementu su tam tikru tarpu

console.log(names.join());

console.log(names.join("    "));

console.log(names.join("----"));



// .pop() ------- naikina paskutini elementa----------
// 
names.pop();

console.log(names);



// .push() ------ ideda viena elementa i gala
// 
names.push("kirvis");
names.push("valtis");
names.push("inkaras");

//arba 

names[names.length] = "antras kirvis"; // ideda i gala

console.log(names);

console.log(names.length);

