<?php
	include('./connect.php');
	$text=$_POST['comment'];
	$story=$_POST['story'];
	mysqli_query($connect,"INSERT INTO `comment` (`user`, `story`, `comment`) VALUES ('".$_SESSION['user']['pk']."', '".$story."','".$text."')");
?>
<script>
	window.location.href="post.php?post=<?=$story?>";
</script>