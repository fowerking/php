<?php 
	// 重新赋值
	setcookie('username','Franch',time() + 86400);
	// 删除cookie
	// setcookie('username','asdf',time() - 3600);

	if (count($_COOKIE) > 0) {
		# code...
		echo "一共有".count($_COOKIE)."COOKIE";
	}else{
		echo "没有设置任何cookie";
	}

	if (isset($_COOKIE['username'])) {
		# code...
		echo "你的用户名是：".$_COOKIE['username'];
	}else{
		echo "用户名不存在!";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page 2</title>
</head>
<body>
	
</body>
</html>