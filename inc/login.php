<?php

class Login extends Connection{

  function __construct(){
    parent::__construct();
  }

  function loginCheck(){
    if(isset($_SESSION['yetki'])){
      if($_SESSION['yetki'] == "access"){
        return true;
      }
    }
    return false;
  }

  function login($username,$password){
    $query = $this->pdo->prepare("SELECT * FROM owners WHERE eposta = ? and sifre = ?");
    $query->bindValue(1,$username);
    $query->bindValue(2,$password);
    if($query->execute()){
      return $query->rowCount();
    }
    return false;
  }

}

?>
