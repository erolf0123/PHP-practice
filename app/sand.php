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
	<?php
	include('connect.php');
	$sand=mysqli_query($connect,"select * from sand where pk = ".$_GET['sand'] );
	$row=mysqli_fetch_array($sand);
	$sandname=$row['Sandname'];
	$sandsand=mysqli_query($connect,"select * from sandjoin where band = ".$_GET['sand']);
	$sand_member_count= mysqli_num_rows($sandsand)+1;
	?>
	<div class="backimage1">
		<div class="row">
			<div class="col s2">
				<i class="material-icons center fontwhite">arrow_back</i>
			</div>
			<div class="col s6">
			</div>
			<div class="col s2">
				<i class="material-icons center fontwhite">search</i>
			</div>
			<div class="col s2">
				<i class="material-icons center fontwhite">border_color</i>
			</div>	
		</div>
	</div>
	<div class="middlepage">
		<div class="row">
			<div class="col s9">
				<div class="font18 fontblack fontbig">
					<?=
						$sandname
					?>
				</div>
				<div>
					<span class="fontgray">밴드명 공개 · 멤버 <?=$sand_member_count?></span>
				</div>
			</div>
			<div class="col s3">

			</div>
			<div class="col s12">
				<hr>
			</div>
			<div class="col s6 center">
				<i class="material-icons fontblack">group</i>
			</div>
			<div class="col s6 center">
				<i class="material-icons fontblack">apps</i>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="row">
			<div class="col s2">
				<img src="https://t3.ftcdn.net/jpg/00/64/67/52/240_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" width="40px;" height="40px;">
			</div>
			<div class="col s8">
				<div class>z</div>
				<div class="">1일전</div>
			</div>
			<div class="col s12 bordertop">
				C언어로 해킹이 가능한가요 답변 부탁드립니다.
			</div>	
		</div>
		<div class="row">
			<div class="col s12 bordertop"> 
				<div class="col s6">
					<div class="center rightsilverborder">좋아요</div>
				</div>
				<div class="col s6">
					<div class="center">댓글쓰기</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>