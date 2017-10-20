// 在 node js 中经常使用的函数表达式

function sayHi1(){
	console.log("hello xiaochen");
}
// sayHi();
// 函数表达式   右左法则
var sayHi2 = function () {
	console.log("hello miaojie");
}
// sayHi();
function callFunction(foo){
	foo();
}
callFunction(sayHi2);