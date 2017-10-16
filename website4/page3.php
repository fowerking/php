<?php 
	session_start();
	# 改变session存储的值
	$_SESSION['name'] = "zhangyun";
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : "属性不存在";
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : "属性不存在";
	// $name = $_SESSION['name'];
	print_r($_SESSION);

	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>page 3</title>
 </head>
 <body>
 	<h2><?php echo $name; ?></h2>
 </body>
 </html>