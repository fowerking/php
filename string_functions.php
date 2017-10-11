<?php 
	# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "HelloWorld";
	$output = substr($output,2,5);
	echo $output;
	echo "<br>";
	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output);
	echo "<br>";
	# 查找字符串首次出现的位置 strpos
	$output = strpos($output,"lo");
	echo $output;
	echo "<br>";
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	$output = "helloworld";
	$output = strrpos($output, "o");
	echo $output;
	echo "<br>";
	# 去除首尾空格trim
	$out = "   helloworld  "; 
	echo strlen($out);
	echo "<br>";
	$newString = trim($out);
	echo strlen($newString);
	echo "<br>";
	
	# 将字符串转为大写 strtoupper
	$str = "hello world";
	$newStr = strtoupper($str);
	echo $newStr;
	echo "<br>";
	
	# 将字符串转为小写 strtolower
	$lowerStr = strtolower($newStr);
	echo $lowerStr;
	echo "<br>";
	# 将每个单词首字母大写 ucwords
	$ucword = ucwords($str);
	echo $ucword;
	echo "<br>";
	
	# 替换所有匹配的内容  str_replace
	$text = "Hello World";
	$output = str_replace("World", "Everybody", $text);
	echo $output;
	echo "<br>";
	
	# 判断是否是字符串  is_string
	$val = "22";
	$output = is_string($val);
	echo $output;// 1
	echo "<br>";
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,"23",23.4,"32.4",""," ",0,"0");
	foreach ($values as $value) {
		# 判断value是否为字符串，如果是，输出
		if(is_string($value)){
			echo $value." is a string!<br>";
		}
	}
	echo "<br>";
	# 压缩字符串  gzcompress
	$string = "一大堆文字";
	$compressed = gzcompress($string);
	echo $compressed;
	echo "<br>";
	# 解压字符串
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;
	echo "<br>";
 ?>