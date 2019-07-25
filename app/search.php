<html>
<head>
	<?php
	include('connect.php');
	$query = mysqli_query($connect, "select * from `sand` ");
	?>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
	<div class="posifix">
		<nav class="center col s12" style="background-color: white;">
			<div class="row">
				<div class="col s2 center"><i class="material-icons fontblack">chevron_left</i></div>
				<div class="col s8 center font20black">search</div>
				<div class="col s2"></div>
			</div>
		</nav>
		<nav>
			<div class="nav-wrapper">
				<form >
					<div class="input-field">
						<input id="search" type="search" required>
						<label class="label-icon" for="search"><i class="material-icons">search</i></label>
						<i class="material-icons">search</i>
					</div>
				</form>
			</div>
		</nav>
	</div>
	<div class="col s12">
		<div class="row">
			<?php
			while ($row = mysqli_fetch_array($query)) {
				?>
				<div class="col s4">
					<div>
						<img src="http://i.imgur.com/RoMN1Dr.jpg" width="100%">
					</div>
				</div>
				<div class="col s8">
					<div>
						<div><?= $row['Sandname']?></div>
						<div>
							<?php
							$userquery=mysqli_query($connect, "select * from `user` where pk=".$row['Sandadmin']);
							$userdata=mysqli_fetch_array($userquery);
							echo $userdata['id'];
							?>

						</div>
					</div>
					</div>	<?php 
				} ?>
			</div>
		</div>
	</body>
	</html>