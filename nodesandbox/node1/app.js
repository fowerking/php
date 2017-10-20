// var counter = require("./module");//得到的是一个函数，需要有变量接收

// console.log(counter(["H","2","3"]));

// var adder = require("./module");
// console.log(adder(2,3));

var stuff = require("./module");
console.log(stuff.adder(3,4));
console.log(stuff.counter(["asd","asd","ds"]));
console.log(stuff.pi);