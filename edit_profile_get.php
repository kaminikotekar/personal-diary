<?php
session_start();
$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());

$query="SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_SESSION["email"])."'"; //inserting query

if($result=mysqli_query($link,$query))  //true
{ 
	$row= mysqli_fetch_array($result);
	echo $row['name']."|";
	echo $row['email']."|";
	echo $row['password']."|";
}

?>