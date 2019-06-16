var data = new Date();
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
$('.left_btn').click(function (e) { 
    console.log("1");
    num-=1;
    if(num<0) num=1;
    GetWeather(regions[num])
    $('.num1').html(num+1);
});
$('.right_btn').click(function (e) { 
    num+=1;
    if(num>=arr_len) num=0;
    GetWeather(regions[num])
    $('.num1').html(num+1);
});
$(document).ready(function () {
    GetWeather(regions[num])
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
}