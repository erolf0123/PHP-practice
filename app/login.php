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
<div class="wrapper" style="padding-top: 200px;">
	<div class="container">
		<h1>Sand</h1>
		
		<form class="form" method="POST" action="./loginok.php">
			<input type="text" placeholder="Username" name="idcheck">
			<input type="password" placeholder="Password" name="pwcheck">
			<div><button type="submit" id="lgin">Login</button></div>
			<button style="margin-top: 10px;" type="submit" id="login-button" onclick="window.location.href='join.php'">Join</button>
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
	$('#lgin').click(function(){
			if(!$("#idcheck").val()||!$("#pwcheck").val()){
			alert("empty");
		}
			
		})
</script>

</body>
</html>