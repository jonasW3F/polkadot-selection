<?php
session_start();

require_once "connect.php";

$length = 10;    
$sd = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
$_SESSION['user'] = $_POST['login'] . $sd;
header("Location: step2.php");
die();
