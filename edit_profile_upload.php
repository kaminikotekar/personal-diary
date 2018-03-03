<?php
session_start();
$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());

$name=$_GET["name"];
$password=$_GET["password"];

 $query="UPDATE `user` SET `name`='".mysqli_real_escape_string($link,$name)."', `password`='".mysqli_real_escape_string($link,$password)."' WHERE `user`.`email`='".mysqli_real_escape_string($link,$_SESSION["email"])."'";

if($result=mysqli_query($link,$query))  //true
{ 
	
	$_SESSION["name"]=$name;
	$_SESSION["password"]=$password;
}
else
echo "unsuccessful";

?>