console.log("veikia");


// kaip greiciau tasti klaidas

// 1) naudoti console.log("veikia - isvedimas")

for ( var i = 0; i < 5; i++) {
    console.log("ciklas for"); //test    
}

// 2) testuoti kuo mazesnias kodo dalis:
// pvz : viena f-ja, viena FOR


// 3) testoti su DEBUGER 
// (ilgiau uztrunka, bet patikrini visus kompiuterio zingsnius)
// tikrina - kintamuju  reikmias, if ar true, ar false, parodyti FOR cikla

let x; // undefined  ---- jei nepriskiri reiksmes
x = 10;
x = 20;

if ( x < 1000) {
    for ( var i = 0; i < 5; i++) {
        console.log("ciklas for" + x); //test    
    }
}
