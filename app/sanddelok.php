<?php
include 'connect.php';
$sand=$_GET['sand'];
mysqli_query($connect,"DELETE FROM `sandjoin` WHERE `band` = '".$sand."' and `user` = '".$_SESSION['user']['pk']."'");
?>
<script>
window.location.href="/app/"
</script>