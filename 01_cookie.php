<?php
header('Content-Type:text/html; charset=utf-8');

/*
COOKIE的操作：
1. 增
	setcookie('username','AAAAAA',time()+24*3600);
	注意：
		1）COOKIE的名字与变量的命名类似，可以是：英文、数字、下划线
		2）COOKIE的值必须是字段串类型，其它类型会尝试自动转移，成功才正常写入，否则报错
		3）生存周期是第三个参数，必须写int类型的时间戳，如果要写成当前时间进行适当延后，可以这样写： time()+延长时间秒数
2. 删
	setcookie('username','刘备',time()-1);
	//让COOKIE的有效期为一个已经过去的时间，相当于刚创建就失效，就是删除的功能
3. 改
	setcookie('username','刘备',time()+24*3600);
4. 查
	$_COOKIE['username'];
	//使用$_COOKIE['username'] 超全局变量可以读取浏览器带过来的COOKIE值
*/

//setcookie('username','AAAAAA',time()+24*3600);
//setcookie('username','刘备',time()+24*3600);
setcookie('username','刘备',time()+100);

?>