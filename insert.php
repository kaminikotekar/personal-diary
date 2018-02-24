<?php
session_start();
$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());
$title=$_GET["title"];
$content=$_GET["content"];

if($title!=""&&$content!="")
{
$query="INSERT INTO Book VALUES(NULL,'".mysqli_real_escape_string($link,$_SESSION["email"])."','".mysqli_real_escape_string($link,$title)."','".mysqli_real_escape_string($link,$content)."')"; //inserting query

if($result=mysqli_query($link,$query))  //true
{ 
	echo "successful";
}
}
?>