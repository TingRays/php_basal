<?php
header('Content-Type:text/html; charset=utf-8');

$imgname=$_POST['imgname'];
$img=$_FILES['img']; //获取到上传文件的信息
$ext=strrchr($img['name'],'.'); //获取到文件的扩展名

if($ext=='.jpg' || $ext=='.png' || $ext=='.gif'){ //判断是否允许该类型的文件上传
	$file='files/'.time().$ext; //构造文件名
	$r=move_uploaded_file($img['tmp_name'],$file); //移动临时文件夹内文件到新的目录去
}else{
	echo '你上传的文件，文件类型不允许';exit;
}

if($r){
	echo '上传成功';
}else{
	echo '上传失败';
}
