console.log("veikia");

// ir mano bandymai...

// // Ka atspausdina console?
// var x = 10;
// function test1(x) {
//  x = 15;
//   var y = 44;
//  console.log(x);
//  console.log(y);
// }
// test1(77); // gerai. 10
// console.log(x);
// console.log(y);

// // Ka atspausdina console?
// var x = 10;
// function test1() {
//     console.log(x);  // nera f-jos
// }

//
// // Ka atspausdina console?
// var x = 5;
// function test1() {
//     x = 0;
// }
// test1();
// console.log(x);  //0

//
// // Ka atspausdina console?
// var x = 5;
// function test1() {
//     x = 0;
// }
// console.log(x); // 5
// test1();
//
//
// // Ka atspausdina console?
// var x = 0;
// function test1() {
//     var x = 100;
// }
// console.log(x);  // 0
// test1();

//
// // Ka atspausdina console?
// var x = 200;
// function test1(x) {
//     var x = 100;
//     console.log(x);
// }
// test1(555); //100
// //
// // // Ka atspausdina console?
// var x = 50;
// function test1() {
//       x = 10;
// }
// console.log(this.x); //50
// test1();



// // Ka atspausdina console?
// var x = 22;
// function test1() {
//       x = 11;
// }
// test1();
// console.log(x); //22
// //
//
// // Ka atspausdina console?
// var x = 33;
// function test1(x) {
//      x = 44;
//      console.log(x);
// }
// test1(55);
//
//
// // Ka atspausdina console?
// var x = 999;
// function test1(x) {
//      console.log(x);
// }
// test1(888);
//
// // Ka atspausdina console?
// var x = 999;
// function test1(x) {
//     console.log(x);
//      x = 555;
// }
// test1(888);
// console.log( x );
//
// // Ka atspausdina console?
//
// var x = 444;
// function test1(x) {
//   x=777;
//   x = 555;
//   window.x = x; // 444 = 777 globalus tampa local
//
// }
// test1(333);
// console.log(x);
//
// var x = 999;
// function test1(x) {
//      console.log(x);
//      x = 555;
// }
// test1(888);
//
//
// // let ir const  scope'ai viekia ir IF sakiniuose
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let
//
// let x = 1;
//
// if (true) {
// let x = 2;
//   console.log(x); // 2
// }
// console.log(x);   //  1
//
// //---------------------
// let x = 11;
//
// function test() {
//     let x = 22;
//     if (true) {
//         let x = 33;
//     }
//     console.log("viduje test()", x); //22
// }
// console.log("pries test()", x); //11
// test();
// console.log("po test()", x); //11
