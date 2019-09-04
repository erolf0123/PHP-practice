<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="register1">register</div>
		<br><br>
			<form class="col s12" action="joinok.php" method="POST" id="page">
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Id" id="id" name="id" type="text" class="validate">
						<label for="first_name"></label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" name="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="passwordcheck" type="password" class="validate">
						<label for="passwordcheck">Password check</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" ty pe="email" name="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="center">
					<a class="btn waves-effect waves-light" id="btn" type="submit" name="action">
						<i class="material-icons"> Sign Up </i>
					</a>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		$('#btn').click(function(){
			if($('#password').val()!=$('#passwordcheck').val()){
				alert("비밀번호가 일치하지 않습니다.");
			}
			else{
				$('#page').submit()
			}
		})
	</script>
</body>
</html>