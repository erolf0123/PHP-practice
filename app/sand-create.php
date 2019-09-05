<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" type="text/css" href="app.css">
	<style type="text/css">
		.preview {
			width : 100%;
			height : 100%;	
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
<body>
	<form enctype='multipart/form-data' method="POST" action="sand-create-ok.php" id="form1">
		<div class="continer">
			<nav>
				<div class="col s12">
					<div class="row">
						<a href="./index.php"><div class="col s2 center">Back</div></a>
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
								<div>
									<img class="preview" src="http://placehold.it/150x150"/>
									<input id="upload" name="image" type="file" accept="image/*"/>
								</div>

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
	<script>
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
	</script>
</body>
</html>