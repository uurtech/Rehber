<body>

<div id="orta">
<form id="form" method="post" class="form">
<input type="text" id="keyword" name="keyword" class="form-control"/>
</form>
</div>
<script type="text/javascript">
$("#form").submit(function(){

  var keyword = $("#keyword").val();
  if(keyword == "ekle" || keyword == "EKLE"){
    window.location = "index.php?ekle=true";
  }else{

  $.ajax({url: "search.php",type: "POST", data:{"keyword":keyword}, success: function(result){

      }});

    }
return false;
});
</script>
</body>
