<?php
include('./connect.php');
$name=$_POST["name"];

session_start();
$app = "INSERT INTO sand(Sandname,Sandadmin) VALUES ('".$name."', '".$_SESSION['user']['pk']."')";
echo $app;
mysqli_query($connect,$app);
?>