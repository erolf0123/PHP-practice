Skip to content

Search or jump to…

Pull requests
Issues
Marketplace
Explore

@erolf0123 
0
0 0 erolf0123/PHP-practice Private
Code  Issues 0  Pull requests 0  Projects 0  Security  Insights  Settings
PHP-practice/app/search.php
@erolf0123 erolf0123 update
fa1ed02 2 days ago
68 lines (63 sloc)  2.06 KB

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
		<div>
		<?php
		while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col s12">
				<div class="row">
					<div class="col s4">
						<img src="http://i.imgur.com/RoMN1Dr.jpg" width="100%">
					</div>
					<div class="col s8">
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
			<?php 
		} ?>
	</div>
	</body>
	</html>