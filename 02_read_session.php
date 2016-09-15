<?php
header('Content-Type:text/html; charset=utf-8');
session_start();

$_SESSION=array();

echo $_SESSION['username'];