<?php
include('connect.php');
$like = array('response' =>'like');
$unlike = array('response' =>'unlike');
$check_query=mysqli_query($connect,"select * from storylike where user= ".$_SESSION['user']['pk']." and story=".$_GET['story']);
$check_rows= mysqli_num_rows($check_query);
if($check_rows>0){
	mysqli_query($connect,"DELETE FROM `storylike` WHERE  user= ".$_SESSION['user']['pk']." and story=".$_GET['story']);
	echo  json_encode($unlike);
}
else{
	mysqli_query($connect,"INSERT INTO `storylike` (`pk`, `user`, `story`) VALUES (NULL, ".$_SESSION['user']['pk'].", ".$_GET['story'].")");
	echo json_encode($like);
}
?>