// // Ka atspausdina console?
// var x = 10;

// function test1() {
//     console.log(x);
// }
// test1(); // tik iskviecia
// console.log(x); // 10


// // Ka atspausdina console?
// var x = 10;

// function test1() {
//     console.log(x);
// }

// // nieko, nes neiskviesta funkcija


// // Ka atspausdina console?
// var x = 5;

// function test1() {
//     x = 0; // global
// }
// test1(); // 0. nieko
// console.log(x); // 0


// // Ka atspausdina console?
// var x = 5;

// function test1() {
//     x = 0;
// }
// console.log(x); // 5, nes funkcijos iskvietimas po log
// test1(); // nieko, bet jei butu log po juo tada 0
// console.log(x); // 0


// // Ka atspausdina console?
// var x = 0;

// function test1() {
//     var x = 100;
// }
// console.log(x); // 0
// test1(); // 100


// // Ka atspausdina console?
// var x = 200;

// function test1(x) {
//     var x = 100;
//     console.log(x); // 100 
// }
// test1(555); // nieko
// console.log(x); // 200

// // Ka atspausdina console?
// var x = 50;

// function test1(x) {
//     var x = 10;
// }
// test1(99); // nieko
// console.log(x); //50


// // Ka atspausdina console?
// var x = 22;

// function test1(x) {
//     x = 11; // local
// }
// test1(13);  //nieko
// console.log(x); //22


// // Ka atspausdina console?
// var x = 33;

// function test1(x) {
//     x = 44;
//     console.log(x); // 44
// }
// test1(55); // nieko, tik iskviecia


// // Ka atspausdina console?
// var x = 999;

// function test1(x) {
//     console.log(x); // 888, nes yra test, todel atspausdins
// }
// test1(888); // 888

// // Ka atspausdina console?
// var x = 999;

// function test1(x) {
//     console.log(x); // 888 , nes test 888
//     x = 555;
// }
// test1(888); // 
// console.log(x); // 999

// // Ka atspausdina console?

// var x = 444;
// function test1(x) {
//     x = 777;
//     window.x = x; // 444 = 777  tik pasikeicia, jei po juo butu console log tada butu 777
//     x = 555;
// }
// test1(333); // tik iskviecia
// console.log(x); /// 777, nes x pakeite reiksmia

// // Ka atspausdina console?

// var x = 999;

// function test1(x) {
//     console.log(x); // 888
//     x = 555; // sita atspausdintu tik jei po juo butu log
// }
// test1(888);


// // let ir const  scope'ai viekia ir IF sakiniuose
// // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let

// let x = 1;

// if (true) {
//     let x = 2;
//     console.log(x); // 2
// }
// console.log(x); //  1

// //---------------------
// let x = 11;

// function test() {
//     let x = 22;
//     if (true) {
//         let x = 33;
//     }
//     console.log("viduje test()", x);
// }
// console.log("pries test()", x);
// test();
// console.log("po test()", x);
