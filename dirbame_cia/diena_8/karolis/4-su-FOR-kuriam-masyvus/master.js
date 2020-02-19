console.log(" as veikiu");
// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
mas = [];
for (var i = 1; i < 50; i+=2) {
  mas[i] = 3;
}
console.log(mas);
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var mas2 = [];
var t = 0;
while (t < 50) {
  mas2[t] = 1;
  t++;
}
console.log(mas2);

var arIeskome = true;
while(arIeskome){
  console.log("while cikle, bet matysim tik viena karta");
  arIeskome = false;
}
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
for (var i = 1; i < 50; i+=2) {
  mas2[i] = 3;
}

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
