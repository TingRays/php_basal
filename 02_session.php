<?php
header('Content-Type:text/html; charset=utf-8');
session_start();

/*
SESSION的操作：
1. 增
	$_SESSION['username']='隔壁老王';
	$_SESSION['age']=18;
2. 删
	unset($_SESSION['username']); //删除一条SESSION数据
	
	//全部清除
	foreach($_SESSION as $k => $v){
		unset($_SESSION[$k]);
	}
	
	//快速全部清除
	$_SESSION=array();
	
3. 改
	$_SESSION['username']='隔壁小王';
4. 查
	$_SESSION['username']
	$_SESSION['age']
*/


$_SESSION['username']='隔壁老王';
$_SESSION['age']=18;

echo $_SESSION['username'];