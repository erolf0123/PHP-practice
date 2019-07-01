<?php
	$connect = new mysqli("127.0.0.1", 'root', '', 'app');
	$email=$_POST["email"];
	$id=$_POST["id"];
	$pw=$_POST["password"];
	$check_query= mysqli_query($connect, "select * from `user` where `id` = '".$id."'");
	$check_row=mysqli_num_rows($check_query);
	if($check_row>0){
		echo "<script>alert('이미 존재하는 아이디입니다.')</script>";
			echo"<script> history.back()</script>";
	}
	else if(!$email){
		echo "<script>alert('이메일을 입력해 주세요.')</script>";
		echo "<script> history.back()</script>";
	}
	else{
		echo"<script>alert('가입완료.')</script>";
		$app = "INSERT INTO user(email, id, password) VALUES ('".$email."', '".$id."', '".$pw."')";
	mysqli_query($connect,$app);
	echo"<meta http-equiv='refresh' content='0;url=./login.php'>";
	}
	
?>

