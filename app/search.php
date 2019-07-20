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
		<nav class="center col s12" style="background-color: gold;">
			<div class="row">
				<div class="col s2 center"><i class="material-icons">chevron_left</i></div>
				<div class="col s8 center">search</div>
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
	<div class="list-container">

	<?php
	while ($row = mysqli_fetch_array($query)) {
?>
	<div class="col s12 m7">
		<div class="card horizontal">
			<div class="card-image">
				<img src="https://w.namu.la/s/e14b7d868d865c4ea8c3a72eefe5180adb779edabae6928b1be7f3625c7232ea0ec0048e0172b302b455e7aa9c5a122cf10ac6a89d5ed5923be51059aba466cc28b0311b6b864011c75d9c645cb04857efa2ebfacbf6fc7ce2a75c480f4b674a">
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p><?= $row['Sandname']?></p>
					<p>
					<?php
					$userquery=mysqli_query($connect, "select * from `user` where pk=".$row['Sandadmin']);
					$userdata=mysqli_fetch_array($userquery);
					echo $userdata['id'];
					?></p>
				</div>
			</div>
		</div>
	</div>
	<?php 
	} ?>
	

</div>
</body>
</html>