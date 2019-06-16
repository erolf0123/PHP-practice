<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="check.php" method="POST">
            <div class="col s6">
                <input type="text" name="login">
            </div>
            <div class="col s6">
                <input type="password" name="pw">
            </div>
            <div class="col s12">
                <button type="submit">Login</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>