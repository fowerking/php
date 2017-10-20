var http = require("http");// 引入模块，名字无所谓
// 然后使用模块进行引用方法
var server = http.createServer(function(req,res){//
	console.log("客户端和服务器已经建立通讯" + req.url);//
	res.writeHead(200,{"Content-type":"text/plain"});//响应头，状态码，第一个，必须在200的时候才行
	res.end("Hey NodeJS");//可以传递数据
});

server.listen(8081,"127.0.0.1");//在浏览器中键入，端口号，才会触发

console.log("server is running...");