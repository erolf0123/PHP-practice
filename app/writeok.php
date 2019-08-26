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

// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
		echo "파일이 너무 큽니다. ($error)";
		break;
		case UPLOAD_ERR_NO_FILE:
		echo "파일이 첨부되지 않았습니다. ($error)";
		break;
		default:
		echo "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	exit;
}

// 파일 이동
move_uploaded_file( $_FILES['image']['tmp_name'], "upload/$name");
mysqli_query($connect,"INSERT INTO `story` (`writer`, `image`, `band`, `text`, `pk`) VALUES ('$writist', '/upload/$name', '$band', '$textval', NULL);")
?>
<script>
	window.location.href="sand.php?sand=<?=$band?>";
</script>