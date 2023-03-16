<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Covid19-Kdy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!------------include files------------>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>


<!----Navigation---->
<?php include 'header.php';?>
<!---navend----->


<!----header------>
<div class="jumbotron text-center" style="margin-top:-6%;">
    <div class="on-light">
    <button class="border-gradient ButtonCAP border-gradient-green">
      <span class="CovidText">Covid Updates&nbsp;<i class="fas fa-pencil-alt"></i></span>
    </button>
  </div>
</div>
<!----headerend--->

<!---------------->
<section id="FirstSection">
  <div class="FirstBack text-center">
    <h1 class="text-center MalayalamText">വാർഡ് മെമ്പേർസ്</h1>
      <hr class="style-two">
  </div>
</section>
<!---------------->

<!----WardmemberSection--------->
<section id="WardmemberSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 PaddingTB">
        <div class="wardContainer">
          <img src="images/avatharWard.png" alt="Avatar" style="width:90px">
          <p class="Wardpara"><span>ശങ്കരനാരായണൻ ടി കെ</span><br> 5 -)൦  വാർഡ് മെമ്പർ</p>
          <p class="Wardpara"><a href="tel:9747725562">9747725562</a></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 PaddingTB">
        <div class="wardContainer">
          <img src="images/avatharWard.png" alt="Avatar" style="width:90px">
          <p class="Wardpara"><span>ശങ്കരനാരായണൻ ടി കെ</span><br> 5 -)൦  വാർഡ് മെമ്പർ</p>
          <p class="Wardpara"><a href="tel:9747725562">9747725562</a></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 PaddingTB">
        <div class="wardContainer">
          <img src="images/avatharWard.png" alt="Avatar" style="width:90px">
          <p class="Wardpara"><span>ശങ്കരനാരായണൻ ടി കെ</span><br> 5 -)൦  വാർഡ് മെമ്പർ</p>
          <p class="Wardpara"><a href="tel:9747725562">9747725562</a></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 PaddingTB">
        <div class="wardContainer">
          <img src="images/avatharWard.png" alt="Avatar" style="width:90px">
          <p class="Wardpara"><span>ശങ്കരനാരായണൻ ടി കെ</span><br> 5 -)൦  വാർഡ് മെമ്പർ</p>
          <p class="Wardpara"><a href="tel:9747725562">9747725562</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!----WardmemberSection--------->

<!--------chatbox------------->
<?php include 'ChatboxMalayalam.php';?>
<!-----chatboxend------------->
<script type="text/javascript" src="Chatboxscript.js"></script>

<!-----footer---------->
<?php include 'footer.php';?>
<!------footerend------>


<!--------scripting----->
<script>
  $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 20);
});
</script>
</body>
</html>