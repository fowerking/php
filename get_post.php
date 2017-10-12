<div class="container">
 	<?php 
		// echo $_POST["user"];
		// if(isset($_POST["user"]) && isset($_POST["sbqemail"])){
		// 	// echo $_POST["user"];//检查user是否能获取到
		// 	$name = $_POST["user"];
		// 	$email = $_POST["sbqemail"];
		// 	if(!empty($name) && !empty($email)){
		// 		echo $name." : ".$email;
		// 	}
		// 	print_r($_POST);

		// }
	 ?> 
</div>
<div class="container">
	<?php 
		// echo $_REQUEST["user"];
		if(isset($_REQUEST["user"]) && isset($_REQUEST["sbqemail"])){
			// echo $_REQUEST["user"];//检查user是否能获取到
			$name = $_REQUEST["user"];
			$email = $_REQUEST["sbqemail"];
			if(!empty($name) && !empty($email)){
				echo $name." : ".$email;
			}
			print_r($_REQUEST);
			
		}
		#查询url地址后面的参数
		echo $_SERVER["QUERY_STRING"];
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="user" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="sbqemail" class="form-control">
			</div>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅"; ?>" class="btn btn-success btn-block">
					赵帅
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=郜超"; ?>" class="btn btn-info btn-block">
					郜超
				</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</div>
</body>
</html>