<html>
<head>
	<?php
	include('connect.php');
	$sand=$_GET["sand"];
	$query = mysqli_query($connect, "select * from `sand` where pk='".$sand."'");
	$sand_data=mysqli_fetch_array($query);
	?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php
	$userquery=mysqli_query($connect, "select * from `user` where pk='".$sand_data['Sandadmin']."'");
	$userdata=mysqli_fetch_array($userquery);
	?>
	<div class="row">
		<div class="backimage col s12" style="background-image: url(<?= $sand_data['Image']?>)">
			<div class="col s2"> <br><i class="material-icons fontwhite">house</i></div>
			<div class="col s8"> <br></div>
			<div class="col s2"> <br><i class="material-icons fontwhite">mode_edit</i></div>
		</div>
	</div>
	<div class="container">
		<div class="fontblack font22"><?php echo
		$sand_data['Sandname'];
		?></div>
		<div class="font15 paddingtop5">멤버 2150 · 리더<?php 
		echo $userdata['id'];  ?> </div>
		<div class="paddingtop5 font15_2 ">혼밥 맛있게...............</div>
		<br><br>
	</div>
	<hr>
	<div class="row">
		<div class="col s2"></div>
		<div class="col s8 center">
			<div><i class="large material-icons fontsilver">public</i></div>
			<div class="font22">Join!</div>
			<div class="font18">asdfasdf</div>
		</div>
		<div class="col s2"></div>
	</div>
	<a >
		<div class="row center backgroundgreen footer">
			<a href="./sandjoinok.php?sand=<?=$sand?>" class="font33">Sand Join!</a>
		</div>
	</a>
</body>
</html>