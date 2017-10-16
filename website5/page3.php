<?php 
	$users = ["name" => "H","email" => "H@qq.com","age" => 30];
	$users = serialize($users);
	setcookie('users',$users,time() + 86400);

	$users = unserialize($_COOKIE['users']);
	print_r($users);

 ?>