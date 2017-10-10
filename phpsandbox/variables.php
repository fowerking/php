<?php 
	// echo "Hello world!";
	//	单行注释 window + /;
	#	单行注释 shift + 3;
	/*
		alt + window + /
	*/
	# variable 变量
	$output = "hello world!";
	/*
		- 前缀 $
		- 字母、数字、下划线 组成
		- 数字不能开头
		- 区分大小写
		- 驼峰命名法
	*/
	

	# 数据类型

	/*
		String Integer Float Boolean Array Object Resource(函数)
	*/

	$output = 22;
	$float = 22.22;
	$Boolean = false;//true 1; false 不显示
	echo $output;
	echo $float;
	echo $Boolean;

	#运算符
	$num1 = 10;
	$num2 = 20;
	$num3 = $num1 + $num2;
	echo $num3;

	# 字符串拼接

	$str1 = "hello";
	$str2 = "world";
	#在php中，+ 号 就是 + 号 ， 没有拼接功能；
	// $str3 = $str1 + $str2;
	$str3 = $str1." ".$str2."!";//拼接
	echo $str3;

	#单引号和双引号的区别

	$greeting2 = '$str1 $str2';//单引号的内容是单纯的字符串
	$greeting3 = "$str1 $str2";//双引号的变量可以正常被解析
	echo $greeting2;
	echo $greeting3;

	#转义字符

	$string3 = 'They\'re here';
	$string4 = "they're here"."<hr>";
	echo $string3;
	echo $string4;

	printf($string4);

	#常量
	// 在程序运行中，不可以被改变的量
	define("GREETING", "WhatEver");
	define('GREETING', "what   ever",true);//true为不分大小写
	echo GREETING;
	echo greeting;

	var_dump(greeting);




?>	