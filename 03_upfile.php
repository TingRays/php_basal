<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>上传文件</title>
</head>
<body>
	
	<!--
	上传文件的注意事项：
	1. 必须是POST方式提交表单
	2. FORM的提交编码必须是 enctype="multipart/form-data" ，上传的文件以二进制方式提交，其它内容以文本流方式提交
	3. 上传的数据，文本数据放在$_POST数组里面，文件放在系统的临时目录，PHP脚本执行结束以后就消失了
	4. 如果要保存上传的文件，必须要接收到（$_FILES）并且另存（move_uploaded_file(临时文件路径，目标文件路径)）到其它位置
	-->
	<form action="03_save.php" method="post" enctype="multipart/form-data">
		<p>图片主题：<input type="text" name="imgname"/></p>
		<p>上传文件：<input type="file" name="img"/></p>
		<p><input type="submit" value="提交"/></p>
	</form>
	
	
	
</body>
</html>