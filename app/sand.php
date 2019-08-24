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
	$sand_member_count= mysqli_num_rows($sandsand);
	?>
	<div class="backimage1" style="background-image:url(<?=$row['Image']?>)">
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
				<a href="/app/sandwrite.php?sand=<?=$_GET['sand']?>"><i class="material-icons center fontwhite">border_color</i></a>
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
				<a href="sandpeople.php?sand=<?=$_GET['sand']?>">
					<i class="material-icons fontblack">group</i>
				</a>
			</div>
			<div class="col s6 center">
				<a href="sandopt.php?sand=<?=$_GET['sand']?>">
					<i class="material-icons fontblack">apps</i>
				</a>
			</div>
		</div>
	</div>
	<?php
	$story_query=mysqli_query($connect,"select * from story where band=".$_GET['sand']."");
	while($story_array=mysqli_fetch_array($story_query)){
		?>
		<?php
		$name=mysqli_query($connect,"select * from user where pk=".$story_array['writer']."");
		$name_array=mysqli_fetch_array($name);
		?>
		<a href="post.php?post=<?=$story_array['pk']?>">
		<div class="card">
			<div class="row">
				<div class="col s2">
					<img src="https://t3.ftcdn.net/jpg/00/64/67/52/240_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" width="40px;" height="40px;">
				</div>
				<div class="col s8">
					<div class><?=$name_array['id']?></div>
					<div class=""><?=$story_array['time']?></div>
				</div>
				<div class="col s12">
					<?=$story_array['text']?>
					<?php
					if($story_array['image']){
						?>
						<br>
						<img width="100%" src=".<?=$story_array['image']?>">
						<?php
					}
					?>
				</div>	
			</div>
			<div class="container">좋아요 0개 댓글 1개</div>
			<div class="row like-btn" style="margin:0px;">
				<?php
				$check_query=mysqli_query($connect,"select * from storylike where user= ".$_SESSION['user']['pk']." and story=".$story_array['pk']);
				$like_check=false;
				if(0<mysqli_num_rows($check_query)){
					$text = "<span class='blue-text'>좋아요</span>";
					$like_check=true;
				}
				else{
					$text="좋아요";
				}
				?>
				<div class="col s12 bordertop"> 
					<div class="col s6 rightsilverborder center like-button <?php if($like_check){ echo 'active';}?>" id='story<?=$story_array['pk']?>'>
						
						<div class="center "><?=$text?></div>
					</div>
					<div class="col s6">
						<div class="center">댓글쓰기</div>
					</div>
				</div>
			</div>
			<div class="row #bdbdbd grey lighten-3">
				<div class="s12 bordertop">
					<div class="col">
						<img src="https://t3.ftcdn.net/jpg/00/64/67/52/240_F_64675209_7ve2XQANuzuHjMZXP3aIYIpsDKEbF5dD.jpg" width="30px;" height="30px;" style="margin-top: 5px;">
					</div>
					<div class="col s10">
						asdf
						<br>
						30초전
					</div>
					<div class="col s12">
						씹불가능합니다.
					</div>
				</div>
			</div>
		</div>
	</a>
		<?php
	}
	?>
	<script type="text/javascript">
		$('.like-button').click(function(){
			storyid=$(this).attr('id').slice(5);
			if($(this).hasClass('active')){
				$(this).html('좋아요');
				$(this).removeClass('active');
				$.ajax({
					url:'./story-like.php?story='+storyid,
					dataType:'json',
					type: 'GET',
					success:function(data){}
				})
			}
			else{
				$(this).html('<span class="blue-text">좋아요</span>');
				$(this).addClass("active");
				$.ajax({
					url:'./story-like.php?story='+storyid,
					dataType:'json',
					type: 'GET',
					success:function(data){}
				})
			}
		})
	</script>
</body>
</html>