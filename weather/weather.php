<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./weather.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <?php
    $next=0;
    $back=0;
    if($_GET["area"]==2){
        $next=0;
    }
    else{
        $next=$_GET["area"]+1;
    }
    
    if($_GET["area"]==0){
        $back=2;
    }
    else{
        $back=$_GET["area"]-1;
    }
    ?>
    <div class="background-1">
        <div class="container">
            <div class="center size26 pt"> <a href="/weather/weather.php?area=<?=$back?>"><i class="material-icons left left_btn">arrow_back</i></a><span class="name">로딩중</span><a href="/weather/weather.php?area=<?=$next?>"><i
                    class="material-icons right right_btn">arrow_forward</i></a><br>
                <div class="size22"><span class="num1"><?=$_GET['area']+1;?></span>/<span class="num2"></span></div>
            </div>
            <div class="size70 center temp2">26℃</div>
            <div class="center size20 weather">로딩중</div>
            <div class="etc-data">
                <div class="size18"><i class="material-icons">tag_faces</i><span class="temp3">로딩중</span>%</div>
                <div class="size18"><i class="material-icons">toys</i><span>각도 : </span><span class="temp4"></span><span> 속도 : </span><span class="temp5"></span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>var data = new Date();
time=data.getHours();
console.log(time);
function GetWeather(region){
    $.ajax({
        url:'http://api.openweathermap.org/data/2.5/weather?id='+region+'&appid=7568f986be27505ca8ec45a997e3cf48',
        dataType:'json',
        success:function(data){
            console.log(data);
            $('.name').html(data['name']);
            var temp1 = (data['weather'][0]['main'])
            $('.weather').html(temp1);
            var temp2=(data['main']['temp']-273).toFixed(1);
            $('.temp2').html(temp2);
            var temp3=(data['main']['humidity']);
            $('.temp3').html(temp3);
            var temp4=(data['wind']['deg']);
            $('.temp4').html(temp4);
            var temp5=(data['wind']['speed']);
            $('.temp5').html(temp5);
        }
    })
}
var num=0;
var regions=[1835848,1843564,1838524];
var arr_len=regions.length;
$('.num2').html(arr_len);
$(document).ready(function () {
    GetWeather(regions[<?=$_GET["area"]?>])
});

if(0<=time&&time<6){
    $('.background-1').css('background','linear-gradient(45deg , #403b4a, #e7e9bb)');
}
if(6<time&&time<12){
    $('.background-1').css('background','linear-gradient(45deg , #3d7eaa, #ffe47a)');
}
if(12<time&&time<18){
    $('.background-1').css('background','linear-gradient(45deg , #1e9600, #fff200)');
}
if(18<time&&time<24){
    $('.background-1').css('background','linear-gradient(45deg , #fceabb, #f8b500)');
}</script>
</body>

</html>