<?php 
	#function: 函数 - 具有某一功能的代码块
	/*
		Camel Case - myFunction()  小驼峰
		Lower Case - my_function() 下划线
		Pascal Case - MyFunction() 大驼峰
	*/
	// 定义函数
		// 函数名字不分大小写
// 无参数无返回值
	function SimpleFunction(){
		echo "hello world!";
	}
	// 调用函数
	simpleFunction();
	echo "<br>";

// 有参数无返回值
	function buy($money="20块钱"){
		echo $money."给了，但没给我买东西，拿着钱跑了!";
	}
	buy("30块钱");
	echo "<br>";

#多参数，有返回值
	function sumValue($num1,$num2){
		$sum = $num1 + $num2;
		return $sum;
	} 
	$re = sumValue(5,6);
	echo $re;
	echo "<br>";
#无参数，有返回值
	function buyDrink(){
		return "饭后的饮料!";
	}
	echo buyDrink();
	echo "<br>";

#函数传引用
	$myNum = 10;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);
	echo $myNum; # 拿到了myNum的引用(地址改变了内存中的数值，所以是15

 ?>