<?php
	include('./connect.php');
	$id=$_POST["idcheck"];
	$pw=$_POST["pwcheck"];
	$check_query=mysqli_query($connect, "select * from `user` where `id` = '".$id."'");
	$check=mysqli_fetch_array($check_query);
	$check_row=mysqli_num_rows($check_query);
	if($check_row>0){
		if(password_verify($pw, $check['password'])){
		echo "<script>alert('login ok');</script>";
		echo"<meta http-equiv='refresh' content='0;url=./index.php'>";
		$_SESSION['user']=$check;
		}
		else{
			echo "<script>alert('비번X ');</script>";
			echo"<meta http-equiv='refresh' content='0;url=./login.php'>";
		}
	}
	else{
		echo "<script>alert('아이디X ');</script>";
		echo"<meta http-equiv='refresh' content='0;url=./login.php'>";
	}
?>