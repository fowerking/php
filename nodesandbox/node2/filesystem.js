var fs = require('fs');

// //同步 读取 & 写入
var readMe = fs.readFileSync('readMe.txt','utf8');
// // console.log(readMe);
fs.writeFileSync("writeMe.txt","Helloworld");

// // 异步 读取 & 写入

// fs.readFile("readMe.txt","utf8",function(err,data){
// 	if(err)
// 	// {
// 		// throw err;
// 	// }else{
// 		console.log(data);
// 	// }
// })
// console.log("123");

// fs.writeFile("writeMe.txt","Hello one one",function(err){
// 	if(err) throw err;
// 	// console.log(data);
// })


// // 异步读取文件，并将读取的文件内容写入到writeMe.txt 中

// fs.readFile("readMe.txt","utf8",function(err,data){
// 	if(err)
// 	// {
// 		// throw err;
// 	// }else{
// 		// console.log(data);
// 	// }
// })
// fs.writeFile("writeMe.txt",readMe,function(err){
// 	if(err) throw err;
// 	// console.log(data);
// })
// fs.writeFile("writeMe.txt",data);
fs.unlink("writeMe.txt");
// 创建文件夹
fs.mkdir("stuff");
// 删除文件夹
fs.rmdir("stuff");