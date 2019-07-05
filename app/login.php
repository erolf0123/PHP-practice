<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./app.css">
</head>
<body>
	<div class="row">
		<div class="col s5 loginback">
			<div class="center font35 s5middle">안녕하세요 점주님!</div>
			<br><br>
			<div class="center font20">매장 관리를 더 쉽게 할 수 있도록,</div>
			<div class="center font20">점주님을 위한 서비스입니다.</div>
		</div>
		<div class="col s7 loginback2">
			<div class="logincenter middle font35">계정이 있다면 로그인 해주세요.</div>

			<div class="row">
				<form action="./loginok.php" method="POST">
				<div class="input-field col s12">
					<i class="material-icons prefix"></i>
					<input id="idcheck" name="idcheck" type="text" class="validate">
					<label for="icon_prefix">id</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix"></i>
					<input id="pwcheck" name="pwcheck"  type="password" class="validate">
					<label for="icon_telephone">pw</label>
				</div>
				<div class="col s6">
					<div class="paddingleft30"><button class="btn waves-effect waves-light" id="lgin" type="submit" name="action">
						<i class="material-icons ">Sign in</i>
					</button></div>
				</div>
			</form>
				<div class="col s6">
					<a href="./join.php"><div class="paddingleft30"><button class="btn waves-effect waves-light" type="submit" name="action">
						<i class="material-icons ">Sign Up</i>
					</button></div></a>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#lgin').click(function(){
			if(!$("#idcheck").val()||!$("#pwcheck").val()){
			alert("adsf");
		}
			
		})
			
		
	</script>
</body>
</html>