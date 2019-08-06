<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<?php
	include('connect.php');
	if(!isset($_SESSION['user']['id'])){
		echo"<script>window.location.href='login.php'</script>";
	}
	else{
		?>
		<nav>
			<div class="row">
				<div class="col s1"><i class="material-icons">blur_on</i></div>
				<div class="col s9 logo">SAND</div>
				<div class="col s2"><a href="./search.php"><i class="material-icons">search</i></a></div>
			</div>
		</nav>
		<div class="row">
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#test1"><i class="material-icons">home</i></a></li>
				<li class="tab col s3"><a href="#test2"><i class="material-icons">call_to_action</i></a></li>
				<li class="tab col s3"><a href="#test3"><i class="material-icons">fiber_new</i></a></li>
				<li class="tab col s3"><a href="#test4"><i class="material-icons">chat</i></a></li>
			</ul>
		</div>
		<?php
		$sand=mysqli_query($connect,'select * from sand');
		?>
		<div class="container">
			<div id="test1" class="col s12">
				<div class="row">
					<a href="./sand-create.php">
						<div class="col s6 m6">
							<div class="card height275">
								<div class="yellow center">
									<a href="./sand-create.php">
										<i class="material-icons font100 height80p paddingtop22">add_circle_outline</i>
									</a>
								</div>
								<span class="card-title center"><div class="fontbrown">Sand</div></span>
							</div>
						</div>
					</a>
					<?php
					$join_query=mysqli_query($connect,"select * from sandjoin where user='".$_SESSION[
						'user']['pk']."'");
					while($join_row=mysqli_fetch_array($join_query)){
						$sand_query= mysqli_query($connect,"select * from sand where pk='".$join_row['band']."'");
						$sand_row=mysqli_fetch_array($sand_query);
						?>
						<div class="col s6 m6">
							<div class="card height275">
								<a href="./sand.php?sand=<?=$sand_row['pk']?>">
									<div class="center">
										<div class="imagesize" style="background-image: url(<?=$sand_row['Image']?>);">
										</div>
										<span class="card-title fontbrown"><?=$sand_row['Sandname']?></span>
									</div>
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<div id="test2" class="col s12">Test 2</div>
			<div id="test3" class="col s12">Test 3</div>
			<div id="test4" class="col s12">Test 4</div>
		</div>
		<?php
	}
	?>
	<script>
		$(document).ready(function(){
			$('.tabs').tabs();
		});
	</script>

</body>
</html>