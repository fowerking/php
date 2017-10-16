<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax 1 - 请求纯文本数据</title>
</head>
<body>
	<button id="button">请求纯文本</button>
	<br><br>
	<div id="text">
		
	</div>
</body>
<script>
	// 监听button对象
	document.getElementById('button').addEventListener('click',loadText);
	// 实现loadText方法
	function loadText() {
		// Asynchronouse javascript and xml
		// axios Fetch API prototype NODE API jQuery
		// XMLHttpRequest

		// 1.实例化，xhr对象
		var xhr = new XMLHttpRequest();
		// console.log(xhr.readyState);
		// console.log(xhr);
		// 2.配置对象信息  type | url/file | asyn : 是否异步
		xhr.open("GET","sample.txt",true);

		// // 3.执行方法
		// xhr.onload = function() {
			// if(this.status == 200){
			// 	console.log(this.responseText);	
			// }
		// }
.
		xhr.onprogress = function () {
			console.log("加载页面" + this.readyState);

		}

		xhr.onreadystatechange = function () {
			// console.log(this.responseText);
			if (this.readyState == 4 && this.status == 200) {
				// console.log(this.responseText);
				document.getElementById('text').innerHTML = this.responseText;
			}
		}
		// 4.请求
		xhr.send();

	}
		// 0:请求未初始化
		// 1：服务器连接已建立
		// 2：请求已接收
		// 3：请求处理中
		// 4：请求已完成，且相应已就绪
</script>
</html>