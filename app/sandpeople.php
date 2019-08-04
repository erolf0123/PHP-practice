<?php
include('connect.php');
?>
<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey lighten-5">
	<div class="header">
		<div class="row">
			<div class="col s3">
				<i class="Medium material-icons center fontwhite">arrow_back</i>
			</div>
			<div class="col s6 center">
				<div class="fontwhite font22">멤버</div>
			</div>
			<div class="col s3">
				<div class="fontwhite font20 paddingtop20">초대</div>
			</div>
		</div>
	</div>
	<div class="row backgroundwhite">
		<div class="col s9">
			<input value="" id="first_name2" type="text" class="validate"placeholder="글 내용, #태그, @작성자 검색">
		</div>
		<div class="col s3">
			<a class="waves-effect waves-light btn" style="margin-top: 10%">find</a>
		</div>
	</div>
	<div class="optmiddle3">
		<div class="row">
			<div class="col s2">
				<i class="Medium material-icons center paddingtop10">group_add</i>
			</div>
			<div class="col s8 center">
				<div class="paddingtop8 font18black">
					멤버 초대하기 
				</div>
			</div>
			<div class="col s2">
				<i class="Medium material-icons center paddingtop10">keyboard_arrow_right</i>
			</div>
		</div>
	</div>
</body>
</html>