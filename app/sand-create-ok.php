<?php
include('./connect.php');
$name=$_POST["name"];

$app = "INSERT INTO sand(Sandname,Sandadmin) VALUES ('".$name."', '".$_SESSION['user']['pk']."')";
echo $app;
mysqli_query($connect,$app);
$created_sand = mysqli_query($connect,"select * from sand where Sandname='".$name."' and Sandadmin='".$_SESSION['user']['pk']."';");
$data=mysqli_fetch_array($created_sand);
$join_sand = mysqli_query($connect,"INSERT INTO sandjoin(band,user) VALUES('".$data['pk']."', '".$_SESSION['user']['pk']."');");
?>
<script>alert("밴드가 생성 되었습니다.");
window.location.href="sand.php?sand=<?=$data['pk']?>";
</script>
