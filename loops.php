<?php 
	# 循环 loops : 循环存在的意义 - 让项目制作的更高效

	# 根据某个条件，重复执行某段代码

	/*
	- for
	- while
	- do while
	- foreach//枚举

	*/

	#for循环
	#@params - init,condition,inc
	for($i = 0; $i < 10; $i ++){
		echo ($i+1)."<br>";
	}

	#while循环
	#@params - condition
	$i = 0;
	while ($i < 10) {
		echo $i."<br>";
		$i ++;
	}

	#do while
	#@params - condition
	$i = 0;
	do{
		echo $i."<br>";
		$i ++;
	}while($i < 10);

	#foreach循环 下标数组
	$people = array("H","B","E");
	foreach ($people as $person) {
		echo $person;
		echo "<br>";
	}
	#foreach循环 关联数组
	$people = array(
		"H"=>"H@qq.com",
		"B"=>"B@qq.com",
		"E"=>"E@qq.com"
	);
	foreach($people as $person => $email) {
		echo $person.":".$email."<br>";
	}
	// 练习1
	#打印1~100之间7的倍数 
	// 个位为7的数 
	// 十位为7 
	// 个位不为7，十位不为7，以及不是7的倍数

	// 练习2
	// 打印九九乘法表

?>