<?php 
	#array:数组 - 存储一堆数据的集合
	#有效的控制资源
	/*
	下标数组:下标以0开始
	关联数组:关联以第一个名字开头
	*/

	#下标数组

	$people = array("Kevin","Henry","Hemiah");
	echo $people[1];
	#echo $people[3];//数组越界
	echo "<br>";

	$ids = [23,56,42];
	echo $ids[2];
	echo "<br>";

	$cars = ["jdsl","sf","sdf"];
	$cars[3] = "bbb";
	echo $cars[3];
	echo "<br>";

	echo count($cars);
	echo "<br>";

	print_r($cars);
	echo "<br>";

	var_dump($cars);
	echo "<br>";



	#关联数组
	$people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people["Emily"];
	echo "<br>";

	$ids = [22=>"Henry",25=>"Bukcy"];
	echo $ids[22];
	echo "<br>";

	$ids[35] = "Emily";
	echo $ids[35];
	echo "<br>";

	print_r($ids);
	echo "<br>";

	#观察
	$cars[] = "Benth";
	print_r($cars);
	echo "<br>";
	$ids[] = "john";
	print_r($ids);
	echo "<br>";
	$people[] = 55;
	print_r($people);
	echo "<br>";
	echo $people[0];
	echo "<br>";
	#多维数组
	$cars = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("ford",15,10)
	);
	echo $cars[2][1];










 ?>