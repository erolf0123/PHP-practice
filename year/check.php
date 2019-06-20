<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>        
</head>
<body>
<ul class="collection">
    <?php
    $num=$_GET["year"];
    $num-=1;
    $num=2019-$num;
    ?>
      <li class="collection-item">
      <?php 
        echo "born year"." = ".$num;
      ?></li>
      <?php
      $num%=12;
      $arr= array('monkey','chicken','dog','pig','rat','cow','tiger','rabbit','dragon','snake','horse','sheep');
      ?>
      <li class="collection-item">
      <?php
        echo "your Animal is = ".$arr[$num];
      ?>
      <li>
    </ul>
</body>
</html>