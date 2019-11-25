<?php
$pic = "";
$pic = $_FILES["pic"];

//1.判断临时文件是否上传成功
if (!($pic["error"] === 0)) {
	echo("图片上传失败");
}

//2.获取文件扩展名
$exp = strtolower(substr($pic["name"],strrpos($pic["name"], ".")+1));

//3.生成随机一个文件名
$nf = md5(microtime(true)+mt_rand(1000,9999));

//4.拼接到一起
$newfile = $nf.".".$exp;

//5.文件上传
$a = move_uploaded_file($pic["tmp_name"], "userImg/$newfile");
echo $newfile;