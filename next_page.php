<?php
session_start();



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <script src="jquery_ui_go/external/jquery/jquery.js" type="text/javascript"></script>
  <script src="jquery_ui_go/jquery-ui.js"></script>
  <style type="text/css">
    
  .bg { 
background: url(black_bg1.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;


}
@media (max-width: 575.98px) { 
.container{
  width: 300px;
}



 }
.container{
  width: 350px;
  margin-top: 80px;
  background-color: white;
  padding-top: 30px;
  padding-bottom: 30px;
  text-align: center;
  border-radius: 10px;
}
@media (min-width: 576px) { 
.container{
    width: 600px;
}
}
body{
  background: none;
  
}
.h1{
  font-family: 'Caveat', cursive;
}

  </style>


</head>
<body class="bg">

<div class="container">
<p class="h1" style="color: green ">Welcome <?php
echo $_SESSION["name"];

?></p>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pic1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-block">
    <h5 style="color: green">Write what you love</h5>
    <p style="color: green">We'll keep it private!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-block">
    <h5 style="color: green">Add memorable pictures!</h5>
    <p style="color: green">Easy and to manage all of them!</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-block">
    <h5 style="color: green">Create multiple journals</h5>
    <p style="color: green">Get access to all of the them!</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<button  class="btn btn-success mt-sm-3"> Let's get started</button>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
$("button").click(function(){

window.location.href = "http://kaminidairy-com.stackstaging.com/main.php";

});

    </script>

</body>
</html>