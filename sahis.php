<?php
include("inc/conn.php");

class Sahis extends Connection{

  function __construct(){
    parent::__construct();
  }

  function insert($ad,$eposta,$telefon,$dipnot){
    $query = $this->pdo->prepare("INSERT INTO owners(ad,eposta,telefon,dipnot) VALUES(?,?,?,?)");
    $query->bindValue(1,$ad);
    $query->bindValue(2,$eposta);
    $query->bindValue(3,$telefon);
    $query->bindValue(4,$dipnot);
    return $query->execute();
  }
}

$sahiss = new Sahis;
$ad = $_POST['ad'];
$eposta = $_POST['eposta'];
$telefon = $_POST['telefon'];
$dipnot = $_POST['dipnot'];

if($sahiss->insert($ad,$eposta,$telefon,$dipnot)){
  echo "basarili";
}else{
  echo "hatali";
}

 ?>
