<?php
session_start();
$name=$_GET["name"];
$email=$_GET["email"];
$pass=$_GET["password"];
$emaill=$_GET["emaill"];
$passl=$_GET["Passwordl"];
$err="";
$errs="";

$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());
if(($name==""||$email==""||$pass=="")&&($emaill!=""&&$passl!=""))   //for login validation
{
    $query="SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$emaill)."' AND password='".mysqli_real_escape_string($link,$passl)."'";
    $result=mysqli_query($link,$query);
    if($result)
    {
        $no=mysqli_num_rows($result);
        if($no==1)
        {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["name"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["password"]=$row["password"];

      
           header("Location: main.php");
        }
        else
            $err="Oops Incorrect email or password....Try again";
    }
}
else if($name==""||$email==""||$pass=="")
{
    
}
else    //signup validation
{
    $query="SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$email)."'";
    if($result=mysqli_query($link,$query))
    {
        $no=mysqli_num_rows($result);
        if($no>0)
        {
            $errs="Oops!! email already registered...";
        }
        else
        {
            $query1="INSERT INTO user VALUES('".mysqli_real_escape_string($link,$name)."','".mysqli_real_escape_string($link,$email)."','".mysqli_real_escape_string($link,$pass)."')";
        
if($result1=mysqli_query($link,$query1))
{   
        $_SESSION["name"]=$name;
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$pass;
       header("Location: next_page.php");
    
} 
    }

 }
 }         



?>
<!DOCTYPE html>
<html>
<head>

	<title>My Diary</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="jquery_ui_go/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <script src="jquery_ui_go/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="jquery_ui_go/jquery-ui.js"></script>
	<style type="text/css">
            body, html {
    height: 100%;
}

	html { 
background: url(my_dairy_bck.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: none;
}
.container{
	width: 450px;
	}

p{
	text-align: center;
	color: #28A745;
}
.login{
	display: none;
}
.h5{
	color: #218838;
}

button{
    margin-bottom: 10px;
}
#login_link{
    color: blue;
}
#signup_link{
    color:blue;
}

	</style>
</head>

<body>
<div class="container">
<p class="h1" style="font-family:'Caveat', cursive;color:#218838 ;">My personal Diary</p>

<div class="signup">
<p class="h5">Signup</p>
<div class="alerts"> 

<?php
if($errs)
echo "<div class='alert alert-danger'>".$errs."</div>";

?>
</div>
	<form id="form_signup">
	<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email id</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="eg: example@hotmail.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
 
    <button type="submit" class="btn btn-success" value="submit">Signup</button>
  
</form>
<a id="signup_link"><b>Login</b>  </a>
</div>

<div class="login">
<p class="h5">Login</p>
<div class="alertl">
    <?php
if($err)
echo "<div class='alert alert-danger'>".$err."</div>";

?>

</div>
	<form id="form_login">
  <div class="form-group">
    <label for="emaill">Email id</label>
    <input type="email" class="form-control" id="emaill" name="emaill" placeholder="eg: example@hotmail.com">
  </div>
  <div class="form-group">
    <label for="passwordl">Password</label>
    <input type="password" class="form-control" name="Passwordl" id="passwordl">
  </div>
  <button  class="btn btn-success" type="submit">Login</button>
</form>
<a id="login_link"><b>Signup</b>  </a>
</div>



</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	
    	$("#login_link").click(function(){
    		$(".signup").toggle();
    		$(".login").toggle();
           

    	});
        $("#signup_link").click(function(){
            $(".signup").toggle();
            $(".login").toggle();
           

        });
    	

    	$("#form_signup").submit(function(e){
    		var name=$("#name").val();
    		var email=$("#email").val();
    		var password=$("#password").val();
    		var error="<b>There are following error(s):</b>";
    		if(name=="")
    		{
    			error+="<br>Name filed is empty";
    		}
    		if(email=="")
    		{
    			error+="<br>email filed is empty";
    		}
    		if(password=="")
    		{
    			error+="<br>email filed is empty";
    		}
    		if(name==""||email==""||password=="")
    		{
    			$(".alerts").addClass("alert alert-danger");
    			$(".alerts").html(error);
    			return false;
 
    		}
    		else
    			{
    				$(".alerts").removeClass("alert alert-danger");
                    return true;
    			}
    			

    	});
    	$("#form_login").submit(function(e){
    		var email=$("#emaill").val();
    		var password=$("#passwordl").val();
    		var error="<b>There are following error(s):</b>";
    		
    		if(email=="")
    		{
    			error+="<br>email filed is empty";
    		}
    		if(password=="")
    		{
    			error+="<br>password filed is empty";
    		}
    		if(email==""||password=="")
    		{
    			$(".alertl").addClass("alert alert-danger");
    			$(".alertl").html(error);
    			return false;
 
    		}
    		else
    			{
    				$(".alertl").removeClass("alert alert-danger");
    			}
    			return true;

    	});


    </script>


</body>
</html>