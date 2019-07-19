<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./mobile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="mobileloginbackground">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div ><br><br></div>
                <div class="fontleft font37 greenfont sexyfont">Metting is</div>
                <div class="fontleft font33 greenfont sexyfont"> &nbsp; Easy</div>
                <div class="col s3"></div>
                <div class="col s6 centerfont font37 orangefont">sand</div>
                <div class="col s3"></div>
                <form action="./loginok.php" method="POST" id="mobilecheck">
                    <div class="input-field col s12 margintop100">
                        <i class="material-icons prefix"></i>
                        <input id="idcheck" name="idcheck" type="text" class="validate">
                        <label for="icon_prefix">id</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix"></i>
                        <input id="pwcheck" name="pwcheck"  type="password" class="validate">
                        <label for="icon_telephone">pw</label>
                    </div>
                    <div class="col s12">
                        <a class="btn waves-effect waves-light width100p" id="lgin">
                            <i class="material-icons ">SIGN IN</i>
                        </a>
                    </div>
                </form>
                <div class="col s12">
                    <a href="./join.php" class="btn waves-effect waves-light width100p margintop10">
                        <i class="material-icons ">SIGN UP</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#lgin').click(function(){
            if(!$("#idcheck").val()||!$("#pwcheck").val()){
            alert("empty");
        }
            else{
                $('#mobliecheck').submit();
            }
        })
    </script>
</body> 
</html>