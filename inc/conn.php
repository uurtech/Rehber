<?php

class Connection{
  public $pdo = "";
  function __construct(){
    $this->pdo = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","root","");
  }
}

?>
