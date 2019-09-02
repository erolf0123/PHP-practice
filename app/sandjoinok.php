<?php
include('./connect.php');
$sand=$_GET["sand"];
$user_id	= $_SESSION['user']['pk'];
echo $user_id;

$query = mysqli_query($connect, "SELECT * FROM `sandjoin` WHERE `band` = '$sand' AND `user` = '$user_id'");

if(mysqli_num_rows($query)>0){
	echo "<script>alert('이미 가입되셨습니다.')</script>";
			echo"<script> history.back()</script>";
}
else{
mysqli_query($connect, "INSERT INTO `sandjoin` (`pk`, `band`, `user`) VALUES (NULL, '$sand', '$user_id')");
	
	echo "<script>alert('가입되셨습니다.')</script>";
			echo"<script> history.back()</script>";
}


?>