<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
	<form method="POST" action="sand-create-ok.php" id="form1">
		<div class="continer">
			<nav>
				<div class="col s12">
					<div class="row">
						<div class="col s2 center">Back</div>
						<div class="col s8 center">Create sand</div>
						<div id="sub" class="col s2 cetner">Create</div>	
					</div>
				</div>
			</nav>
			<div class="col s12">
				<div class="row">
					<div class="col s3"></div>
					<div class="col s6">
						<div class="card margin100 width100 height33">
							<div class="card-image">
								<img src="https://w.namu.la/s/e14b7d868d865c4ea8c3a72eefe5180adb779edabae6928b1be7f3625c7232ea0ec0048e0172b302b455e7aa9c5a122cf10ac6a89d5ed5923be51059aba466cc93e92fd9f9c8cf0705f9d0e004ce15cb4ad025b16e15c7b0c26d2f0fa89d224c" width="30%" height="100%;">
								<span class="card-title">
								</div>
							</span>
							<div class="input-field">
								<input value="" id="first_name2" name="name" type="text" class="validate">
								<label class="active" for="first_name2">enter the name of the sand</label>
							</div>

						</div>

						
						
					</div>
				</div>
			</div>		
		</div>		
	</form>
	<script>
		$("#sub").click(function(){
			$("#form1").submit();
		})
	</script>
</body>
</html>