var counter = function(arr){
	return `数组中拥有${arr.length}个元素`;
}
// console.log(counter(["H","2","3"]));

var adder = function(a,b){
	return `两个数的和为${a+b}`;
}
var pi = 3.14;
// 只有使用module.exports之后，其他文件才可以引用
// module.exports.counter = counter;
// module.exports.adder = adder;
// module.exports.pi = pi;

//Module pattens 模块模式
module.exports = {
	counter:counter,
	adder:adder,
	pi:pi
}