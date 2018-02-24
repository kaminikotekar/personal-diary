<?php
session_start();
$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());
$title=$_GET["title"];
$content=$_GET["content"];
$query="UPDATE Book SET content='".mysqli_real_escape_string($link,$content)."' WHERE email='".mysqli_real_escape_string($link,$_SESSION["email"])."' AND title='".$title."'";
 $result=mysqli_query($link,$query);
 $row= mysqli_fetch_array($result);

$content = $row['content'];
echo $content;


?>