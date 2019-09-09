<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper" style="padding-top: 100px;">
	<div class="container">
		<h1>Sign Up</h1>
		
		<form class="form" method="POST" action="./joinok.php">
			<input type="text" placeholder="Id" name="id">
			<input type="password" placeholder="Password" id="password" name="password">
			<input type="password" id="passwordcheck" placeholder="Password Check" name="pwcheck2">
			<input type="email" placeholder="Email" name="email">
			<div><button style="margin-top: 10px;" type="submit" id="login-button btn" onclick="window.location.href='login.php'">Sign Up</button></div>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js">
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