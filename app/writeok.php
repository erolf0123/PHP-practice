<?php
include('./connect.php');
$textval = $_POST['text'];
$writist = $_SESSION['user']['pk'];
$band = $_POST['sand'];

    // 설정
$allowed_ext = array('jpg','jpeg','png','gif');

// 변수 정리
$error = $_FILES['image']['error'];
$name = $_FILES['image']['name'];
$file_check=true;

// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
		echo "파일이 너무 큽니다. ($error)";
		break;
		case UPLOAD_ERR_NO_FILE:
		$file_check =false; 
		break;
		default:
		$file_check =false; 
	}
}
move_uploaded_file( $_FILES['image']['tmp_name'], "upload/$name");
if($file_check){
// 파일 이동
	mysqli_query($connect,"INSERT INTO `story` (`writer`, `image`, `band`, `text`, `pk`) VALUES ('$writist', '/upload/$name', '$band', '$textval', NULL);");
}
else{
	mysqli_query($connect,"INSERT INTO `story` (`writer`,`image` ,`band`, `text`, `pk`) VALUES ('$writist',NULL, '$band', '$textval', NULL);");
}
?>
<script>
	window.location.href="sand.php?sand=<?=$band?>";
</script>