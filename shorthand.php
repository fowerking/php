<?php 
	$loggedIn = false;
	$names = ["H","B","E"];
	/*if($loggedIn) {
		echo "U r Logged In";
	}else{
		echo "U r NOT Logged In";
	}
	echo "<br>";
	#三目运算符
	echo ($loggedIn) ? "U r Logged In" : "U r NOT Logged In";
	echo "<br>";
	#简写得到 true 或者 false
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered;
	echo "<br>";
	# 三目嵌套
	$age = 18;
	$score = 80;
	echo "Your score is ".($score > 70 ? ($age < 20 ? "优秀":"一般"):($age < 20 ? "一般":"差等"));
	echo "<br>";
*/

 ?>
 <!-- html + php 嵌套语法糖 -->
 <div>
 	<?php if($loggedIn){ ?>
 	<p>Welcome to Beijing!</p>
 	<?php }else{ ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php } ?>
 </div>
<!-- 优化 -->
  <div>
 	<?php if($loggedIn): ?>
 	<p>Welcome to Beijing!</p>
 	<?php else: ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php endif; ?>
 </div>
 <!-- 遍历数组 foreach -->
 <div>
 	<?php foreach($names as $val): ?>
		<?php echo $val; ?>
 	<?php endforeach; ?>
 </div>
<!-- 使用for循环遍历数组 -->
<div>
	<?php for($i = 0; $i < count($names); $i ++): ?>
		<?php echo $names[$i]; ?>
	<?php endfor; ?>
</div>





