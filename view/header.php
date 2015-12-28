<?php
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
session_start();
include("view/head.php");
if(!isset($_SESSION['yetki'])){
  include("view/login.php");
  exit;
}else{

}

?>
