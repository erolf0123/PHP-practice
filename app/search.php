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
		<div class="row">
		<div class="col s10">
      <input value="" id="first_name2" type="text" class="validate"placeholder="글 내용, #태그, @작성자 검색">
      </div>
      <div class="col s2">
      	<a class="waves-effect waves-light btn" style="margin-top: 10%">find</a>
      </div>
      </div>
	</div>
	<br><br><br><br><br>
	<div style="padding-top: 10px"></div>
	<?php
	while($row=mysqli_fetch_array($query)){
		?>
		<div class="row">
			<div class="col s4">
				<img class="width100" src="https://w.namu.la/s/e14b7d868d865c4ea8c3a72eefe5180adb779edabae6928b1be7f3625c7232ea0ec0048e0172b302b455e7aa9c5a122cf10ac6a89d5ed5923be51059aba466cc93e92fd9f9c8cf0705f9d0e004ce15cb4ad025b16e15c7b0c26d2f0fa89d224c">
			</div>
			<div class="col s8">
				<div><?= $row['Sandname']?></div>
				<p>
					<?php
					$userquery=mysqli_query($connect, "select * from `user` where pk=".$row['Sandadmin']);
					$userdata=mysqli_fetch_array($userquery);
					echo $userdata['id'];
					?>
				</p>
			</div>
		</div>
		<?php
	}
	?>
</body>
</html>