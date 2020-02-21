
// Ka atspausdina console?
var x = 10;
function test1() {
    console.log(x);
}
test1(); // 10

// Ka atspausdina console?
var x = 10;
function test1() {
    console.log(x);
}
// nieko, nes neiskviesta funkcija

// Ka atspausdina console?
var x = 5;
function test1() {
    x = 0;
}
test1(); // 0. nieko
console.log(x); // 5. 0


// Ka atspausdina console?
var x = 5;
function test1() {
    x = 0;
}
console.log(x); // 5
test1(); // nieko


// Ka atspausdina console?
var x = 0;
function test1() {
    var x = 100;
}
console.log(x); // 0
test1(); // 100


// Ka atspausdina console?
var x = 200;
function test1(x) {
    var x = 100;
    console.log(x); // 100 
}
test1(555); // 555. 100

// Ka atspausdina console?
var x = 50;
function test1(x) {
    var x = 10;
}
test1(99);  // 99
console.log(x); //50


// Ka atspausdina console?
var x = 22;
function test1(x) {
     x = 11;
}
test1(13); // 13
console.log(x); //22


// Ka atspausdina console?
var x = 33;
function test1(x) {
     x = 44;
     console.log(x); // 44
}
test1(55); // 55


// Ka atspausdina console?
var x = 999;
function test1(x) {
     console.log(x); // nieko. 888
}
test1(888); // 888

// Ka atspausdina console?
var x = 999;
function test1(x) {
    console.log(x); // 555 . 888
     x = 555;
}
test1(888); // 888
console.log( x ); // 999

// Ka atspausdina console?

var x = 444;
fucntion test1(x) {
  x=777;
  window.x = x; // 444 = 777 globalus tampa local

     x = 555;
}
test1(333); // 333
console.log(x); /// 444. 777

var x = 999;
function test1(x) {
     console.log(x); // 555
     x = 555;
}
test1(888);// 888


// let ir const  scope'ai viekia ir IF sakiniuose
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let

let x = 1;

if (true) {
  let x = 2;
  console.log(x); // 2
}
console.log(x);   //  1

//---------------------
let x = 11;

function test() {
    let x = 22;
    if (true) {
        let x = 33;
    }
    console.log("viduje test()", x);
}
console.log("pries test()", x);
test();
console.log("po test()", x);
