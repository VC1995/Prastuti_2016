<html lang="en">
<head>
    <title>Prastuti 2016</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/success.css">
    <link rel="stylesheet" href="static/css/ionicons.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">
    <script>
        var delay = 6000; //Your delay in milliseconds
        setTimeout(function(){ window.location = 'index.php'; }, delay);
    </script>
    <div id="content" class="container">
        <!-- ****************************** Content **************************** -->
        <div id="tick" class="text-center row">
            <span class="ion-ios-checkmark"></span> 
        </div>
        <div id="success_text" class="text-center row" hidden>
            Successfully Registered!
        </div>
        <br><br><br>
        <div id="redirection" class="text-center row" hidden>
            Go to : <br>
            <a href="index.php"><span class="ion-android-home" ></span> Home</a> <br>
            <a href="registration_form.php"><span class="ion-android-checkbox-outline"></span> Registration page</a> <br>
        </div>
    </div>

    <!-- All the scripts -->

    <script src="static/js/jquery-2.1.3.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/success.js"></script> 

</body>
</html>