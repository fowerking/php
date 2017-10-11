<?php 
	// echo date(); # 至少要给一个参数
	echo date('d'); # day
	echo date('m'); # month
	echo date('Y'); # year 17  Year 2017
	echo date('l'); # day of week

	echo date('Y/m/d'); # 年月日
	echo date('d-m-Y'); # 日月年

	#时分秒
	echo date('h'); #hour
	echo date('i'); #minutes
	echo date('s'); #seconds
	echo date('a'); #AM or PM

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa');
	echo "<br>";
	#mktime
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp;
	echo "<br>";
	# 完整的时间
	echo date("m/d/Y h:i:sa",$timestamp);
	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo "<br>";
	echo $timestamp2;
	echo "<br>";
	$timestamp3 = strtotime("tomorrow");
	echo $timestamp3;
	echo "<br>";
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo "<br>";
	$timestamp4 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp4);

 ?>