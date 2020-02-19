console.log(" as veikiu");

function apskritimoPlotas (){
    let ivedimoLaukas = document.querySelector("#spindulys");
    // console.log( ivedimoLaukas );// test
    //paimame tekstą iš įvedimo lauko
    let ivestasTekstas = ivedimoLaukas.value;
    //arba
    let ivestasTekstas2 = document.querySelector("#spindulys").value;
    // console.log("ivestas tekstas: " + ivestasTekstas2);
    let plotas = Math.PI * ivestasTekstas2 * ivestasTekstas2;
    // console.log("plotas: " + plotas);
    document.querySelector('#rezultatas').innerHTML = "Apskritimo plotas: " + plotas;
}
