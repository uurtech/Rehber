<div id="sahisForm">
<form  id="form" method="post" class="form">
<input class="form-control" id="ad" type="text" name="ad" placeholder="Ad"/>
<input class="form-control" id="eposta" type="text" name="eposta" placeholder="E-posta"/>
<input class="form-control" id="telefon" type="number" name="telefon" placeholder="212 222 22 22"/>
<input class="form-control" id="password" type="password" name="sifre" placeholder="Şifre"/>
</form>
</div>

<style type="text/css">
#sahisForm{
  width:500px;
  margin-left:auto;
  margin-right:auto;
  margin-top:500px;
}
</style>
<script type="text/javascript">

$("#form").submit(function(){

  var ad = $("#ad").val();
  var eposta = $("#eposta").val();
  var telefon = $("#telefon").val();
  var password = $("#sifre").val();

  $.ajax({
    url:'sahis.php',type:'POST',data:{"ad":ad,"eposta":eposta,"telefon":telefon,"sifre":sifre},
    success: function(result){
       if(result == "basarili"){
         alert("basarili")
       }else{
         alert("hatali");
       }
    }
  });
});
</script>
