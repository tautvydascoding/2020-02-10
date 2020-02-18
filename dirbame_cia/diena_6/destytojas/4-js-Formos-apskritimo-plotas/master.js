console.log(" as veikiu");


function apskritimoPlotas() {

    let ivedimoLaukas = document.querySelector('#spindulys');
    // console.log( ivedimoLaukas ); // test

    // bandom paimti teksta is ivedimo lauko
    // let ivestasTekstas = ivedimoLaukas.value;
    // arba
    let ivestasTekstas2 = document.querySelector('#spindulys').value;
    // console.log("iverstas tekstas: " + ivestasTekstas2); // test

    let plotas = Math.PI * ivestasTekstas2 * ivestasTekstas2;
    // console.log("plotas: " + plotas);  // test

    let tekstas =  "Apskritimo plotas apie: " + Math.round(plotas) + "<br>" ;
    document.querySelector('#rezultatas').innerHTML = tekstas ;

}
