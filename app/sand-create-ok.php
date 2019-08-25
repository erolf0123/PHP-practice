<?php
include('./connect.php');
// 설정
$allowed_ext = ['jpg','jpeg','png','gif'];
 
// 변수 정리
$error = $_FILES['image']['error'];
$filename = $_FILES['image']['name'];
 
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
move_uploaded_file( $_FILES['image']['tmp_name'], "./upload/$filename");













$name=$_POST["name"];

$app = "INSERT INTO sand(Sandname,Sandadmin,Image) VALUES ('".$name."', '".$_SESSION['user']['pk']."','./upload/".$filename."')";
mysqli_query($connect,$app);
$created_sand = mysqli_query($connect,"select * from sand where Sandname='".$name."' and Sandadmin='".$_SESSION['user']['pk']."';");
$data=mysqli_fetch_array($created_sand);
$join_sand = mysqli_query($connect,"INSERT INTO sandjoin(band,user) VALUES('".$data['pk']."', '".$_SESSION['user']['pk']."');");
?>
<script>alert("밴드가 생성 되었습니다.");
window.location.href="sand.php?sand=<?=$data['pk']?>";
</script>
