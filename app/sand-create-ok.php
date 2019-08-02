<?php
include('./connect.php');
$name=$_POST["name"];

$app = "INSERT INTO sand(Sandname,Sandadmin) VALUES ('".$name."', '".$_SESSION['user']['pk']."')";
echo $app;
mysqli_query($connect,$app);
?>
<script>alert("밴드가 생성 되었습니다.");
window.location.href="sand.php";
</script>
