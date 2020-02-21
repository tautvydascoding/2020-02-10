console.log(" as veikiu");

//kaip greiciau rasti klaidas
// 1) naudoti console.log("vaikia - isvedimas")
for (var i = 0; i < 5 ; i++) {
    console.log("ciklas for"); //test
}
// 2) testuoti kuo mazesnes kodo dalis:
//pvz: viena f-ja, viena for

// 3) testuoti su DEBUGER (ilgiau uztrunka,
// bet patikrini visus kompiuterio zingsnius)

let x; //undefined
x = 10;
x = 20;
if (x < 1000) {
    for (var i = 0; i < 6 ; i++) {
        console.log("ciklas for" + x); //test
    }
}
