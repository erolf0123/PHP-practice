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
	<style type="text/css">
		.preview {
			max-width : 150px;
			max-height : 150px;
			cursor : pointer;
		}

		#upload {
			display : none;
			top: 1%;
		}

		.upload-image {
			display: block;
		}
	</style>
</head>
<body class="blue-grey lighten-5">
	<div class="writetop">
		<div class="row ">
			<div class="col s2">
				<i class="material-icons center fontwhite paddingtop10">arrow_back</i>
			</div>
			<div class="col s8 center ">
				<div class="fontwhite paddingtop5">글쓰기</div>
			</div>
			<div class="col s2 center">
				<div class="fontwhite paddingtop10" id="okbtn">완료</div>
			</div>
		</div>
	</div>
	<form id="gogogo" enctype='multipart/form-data' method="POST"  action="writeok.php">
		<div class="row">
			<div class="row">
				<div class="input-field col s12 margin0 padding0">
					<textarea id="textarea1" name="text" class="materialize-textarea white"></textarea>
					<label for="textarea1"></label>
				</div>
			</div>
			<div class="col s3 center">
				<img class="preview" width="150" height="150" src="http://placehold.it/150x150"/>
				<input id="upload" name='image' type="file" accept="image/*"/>
			</div>
		</div>
		<input type="hidden" name="sand" value="<?=$_GET['sand']?>">
	</form>
</body>
<script>
	$('#textarea1').val('');
	M.textareaAutoResize($('#textarea1'));
	$(".preview").click(function(){
		$("#upload").click();
	});

	$("#upload").change(function(){
		preview(this);
	});

	function preview(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('.preview').attr('src', e.target.result);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
	$('#okbtn').click(function() {
		$('#gogogo').submit();
	})
</script>
</html>