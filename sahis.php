<?php
include("view/conn.php");

class Sahis extends Connection{

  function __construct(){
    parent::__construct();
  }

  function insert($ad,$eposta,$telefon,$sifre){
    $query = $this->pdo->prepare("INSERT INTO owners(ad,eposta,telefon,sifre) VALUES(?,?,?,?)");
    $query->bindValue(1,$ad);
    $query->bindValue(2,$eposta);
    $query->bindValue(3,$telefon);
    $query->bindValue(4,$sifre);
    return $query->execute();
  }
}

$sahiss = new Sahis;
$ad = $_POST['ad'];
$eposta = $_POST['eposta'];
$telefon = $_POST['telefon'];
$sifre = $_POST['sifre'];

if($sahiss->insert($ad,$eposta,$telefon,$sifre)){
  echo "basarili";
}else{
  echo "hatali";
}

 ?>
