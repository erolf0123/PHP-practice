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
    $num=$_GET["dan"];
    for($f=1; $f<=9; $f++){
        ?>
      <li class="collection-item">
      <?php 
      echo $num."  *  ".$f."  =  ".$num*$f;
      ?></li>  
    <?php
}
?>
    </ul>
</body>
</html>