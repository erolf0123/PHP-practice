<?php
include('./connect.php');
$post_sql=mysqli_query($connect,"select * from story where pk =".$_GET['post']."");
$post_sql_array=mysqli_fetch_array($post_sql);
$writer_sql=mysqli_query($connect,"select * from user where pk =".$post_sql_array['writer']."");
$writer_sql_array=mysqli_fetch_array($writer_sql);
?>
<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="top1 center">
		<div class="row">
			<div class="col s2">
				<i class="material-icons center fontwhite" style="line-height: 50px;">arrow_back</i>
			</div>
			<div class="col s8 topfont1 center" style="line-height: 50px;">
				Sand
			</div>
			<div class="col s2">
			</div>
		</div>
	</div>
	<div class="post borderbtm">
		<br>
		<div class="row">
			<div class="col s2">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0K7OGtmSne8cwi9RniCbUVSkVQUrbtvb6u1wubof2ZOFT87HKcQ" height="30px" width="30px">
			</div>
			<div class="col s8">
				<div class="fontblackyee" style="line-height: 15px;"><?=$writer_sql_array['id']?></div>
				<div class=""><?=$post_sql_array['time']?></div>
			</div>
			<div class="col s2">
				<i class="material-icons center fontblack">dehaze</i>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="col s12">
					<?=$post_sql_array['text']?>
					<?=$_SESSION['user']['pk']?>
				</div>
			</div>
		</div>
	</div>
	<div class="like borderbtm #eeeeee grey lighten-3">
		<div class="row borderbtm margin000">
			<div class="col"><img class="paddingupdown" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Bot%C3%B3n_Me_gusta.svg/1200px-Bot%C3%B3n_Me_gusta.svg.png" height="30px;" width="30px;"></div>
			<div class="col">
				<?php
					$likenum=mysqli_query($connect,"select * from storylike where story = ".$_GET['post']."");
					$likerows=mysqli_num_rows($likenum);
					echo $likerows;
				?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<form action="comment_check.php" method="POST">
					<input type="hidden" name="story" value="<?=$post_sql_array['pk']?>">
					<div class="col s10">
						<div class="input-field col s12 padding000">
							<textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
							<label for="textarea1">Textarea</label>
						</div>
					</div>
					<div class="col s2 padding000">
						<button type="submit" style="width: 100%; margin-top: 10px !important;" class="waves-effect waves-light btn padding000" style="text-align: center;">전송</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="com">
		<div class="#eeeeee grey lighten-3">

			<?php
			$comment_query= mysqli_query($connect,'select * from comment where story="'.$_GET['post'].'"');
			while($row=mysqli_fetch_array($comment_query)){
				$comuser=mysqli_query($connect,'select * from user where pk="'.$row['user'].'")');
				$comquery= mysqli_query($connect,'select * from user where pk="'.$row['user'].'"');
				$comuserdata=mysqli_fetch_array($comquery);
				?>
				<div class="row">
					<div class="col s2">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0K7OGtmSne8cwi9RniCbUVSkVQUrbtvb6u1wubof2ZOFT87HKcQ" height="30px" width="30px">
					</div>
					<div class="col s8">
						<?=$comuserdata['id']?>
					</div>
					<div class="col s12">
						<?=$row['comment']?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</body>
</html>