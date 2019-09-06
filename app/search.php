<html>
<head>
	<?php
	include('connect.php');
	if(isset($_GET['sand'])){
		$query = mysqli_query($connect,"SELECT * FROM `sand` WHERE `Sandname` LIKE '%".$_GET['sand']."%'");
	}
	else{
		$query = mysqli_query($connect,"SELECT * FROM `sand`");
	}
	?>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="app.css">
	<link rel="stylesheet" type="text/css" href="mater.css">
</head>
<body>
	<div class="posifix">
		<nav class="center col s12" style="background-color: white;">
			<div class="row">
				<div class="col s2 center"><a href="./index.php"><i class="material-icons fontblack">chevron_left</i></a></div>
				<div class="col s8 center font20black">
					<?php
					if(isset($_GET['sand'])){
					 echo $_GET['sand'];
					}
					else{
						echo '샌드찾기';
					}
					?></div>
					<div class="col s2"></div>
				</div>
			</nav>
			<div class="row">
				<div class="col s10">
					<form method="GET" action="">
						<input value="" id="first_name2" name="sand" type="text" class="validate"placeholder="글 내용, #태그, @작성자 검색">
					</div>
					<div class="col s2">
							<button type="submit" class="waves-effect waves-light btn" style="margin-top: 10%">find</button>
					</div>
				</form>
			</div>
		</div>
		<br><br><br><br><br>
		<div style="padding-top: 20px"></div>
		<?php
		while($row=mysqli_fetch_array($query)){
			?>
			<a href="./joinsand.php?sand=<?=$row['pk']?>">
				<div class="row">
					<div class="col s4">
						<img class="width100" src="<?=$row['Image']?>">
					</div>
					<div class="col s8">
						<div><?=$row['Sandname']?></div>
						<p>
							<?php
							$userquery=mysqli_query($connect, "select * from `user` where pk=".$row['Sandadmin']);
							$userdata=mysqli_fetch_array($userquery);
							echo $userdata['id'];
							?>
						</p>
					</div>
				</div>
			</a>
			<?php
		}
		?>
	</body>
	</html>