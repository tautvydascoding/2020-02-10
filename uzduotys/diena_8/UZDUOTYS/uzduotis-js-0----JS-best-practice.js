// ========js best practice & common mistakes (~2h )

 google:  w3 js best practice

//==========idomesni isvedimai==============

console.log("paprastas tekstas");
console.warn("ispejimas geltonas");
console.error("raudonas tekstas");

// callback
let suma = function (x,y) { /*aaaa*/ };
let atimtis = function (x,y) { /*aaaa*/ };

function test(x ) {
    ats = 155 + 10;
    x(11,22);
}
test( suma );
test( atimtis );

test( sumirksetiEkranas );
test( siunciamEMail );
test( sukurtiPDFFailas );



//----------------Babel JSaaaaaaaaaaaaaaaaaaaaaaasdfadsfadsfdasfdsafadsfadsfadsfas
function suma2(x = 0, y = 0) {
    let ats = x + y;
}
suma2(9);
