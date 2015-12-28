<?php

include("view/header.php");

if(isset($_GET['ekle'])){
  include("view/ekle.php");
}else{
  include("view/body.php");

}
include("view/footer.php");

 ?>
