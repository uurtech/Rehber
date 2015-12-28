<?php

include("inc/conn.php");
include("inc/login.php");

$loginn = new Login;

$username = $_POST['username'];
$password = $_POST['password'];

if($loginn->login($username,$password)){
session_start();
$_SESSION['yetki']="access";
header("location:index.php");
}else{
  header("location:index.php?err=check");
}

?>
