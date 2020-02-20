console.log(" as veikiu");

// kaip greiciau rasti klaidas
// 1)  naudoti console.log("vaikia - isvedimas")
for (var i = 0; i < 6 ; i++) {
    console.log("ciklas for"); // tests
}
// 2) testuoti kuo mazesnias kodo dalis:
// pvz: viena f-ja, viena FOR

// 3) testuoti su DEBUGER
// (ilgiau uztrunka, bet patikrini vius zingsius kompiuterio)
// kintamuju reiksmes, if ar true ar false, parodyti For cikla

let x;  //  undefinedw
x = 10;
x = 20;
if (x < 1000) {
    for (var i = 0; i < 6 ; i++) {
        console.log("ciklas for" + x); // tests
    }
}
