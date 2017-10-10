<?php 
	header('content-type:text/html;charset=utf-8'); 
	# if & switch
	# 冠希运算符
	/*	> < == >= <= != !== ===	*/
	$num = 2;
	#单个if
	/*
	if($num <= 4){
		echo "num的值一定是小于或者等于4";
	}
	*/
	// if else
	if($num >= 4) {
		echo "true";
	}else{
		echo "false";
	}
	echo "<br>";
	#nesting if
	$num = 4;
	if($num >= 4) {
		if($num <= 10) {
			echo "num一定是在4~10之间";
		}else{
			echo "num一定是大于10";
		}
	}else{
		echo "num一定是小于4";
	}
	echo "<br>";

	#逻辑运算符
	/*
		逻辑与 && AND
		逻辑或 || OR
		逻辑非 ！		
		逻辑异或 XOR
	*/
		$num = 3;
		if($num > 3 XOR $num < 10) {
			echo "num是大于3并且小于10";
		}
		/*
		AND : 一假即假
		OR ： 一真即真
		XOR ：只有一个为真，结果才是真
		*/
	echo "<br>";

	#switch
		$favColor = 1;
		switch ($favColor) {
			case "1":// ==   js中是 ===
				echo "angry";
				break;
			case 'yellow':
				echo "happy";
				break;
			case 'blue':
				echo "silence";
				break;
			case 'green':
				echo "forgive";
				break;
			default:
				echo "GUN";
				break;
		}



















 ?>