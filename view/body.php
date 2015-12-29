<body>

<div id="orta">
<form id="form" method="post" class="form">
<input type="text" id="keyword" name="keyword" class="form-control" autocomplete="off"/>
</form>
<div id="insert" style="margin-top:20px;width:130px;margin-left:auto; margin-right: auto;"></div>
</div>
<script type="text/javascript">
$("#insert").fadeOut();
$("#form").submit(function(){

  var keyword = $("#keyword").val();
  if(keyword == "ekle" || keyword == "EKLE"){
    var doc = document.getElementById("insert");
    doc.innerHTML = "<a href='index.php?ekle=firma' class='btn btn-primary'>Firma</a><a href='index.php?ekle=sahis' class='btn btn-success'>Şahıs</a>";
    $("#insert").fadeIn();
  }else{

  $.ajax({url: "search.php",type: "POST", data:{"keyword":keyword}, success: function(result){

      }});

    }
return false;
});
</script>
</body>
