<html lang="en">
<head>
    <title>Prastuti 2016</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/ionicons.min.css">
    <link rel="stylesheet" href="static/css/owl.carousel.css">
    <link rel="stylesheet" href="static/css/owl.theme.css">
    <link rel="stylesheet" href="static/css/animate.css">
    <link rel="stylesheet" href="static/css/style.css">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<style type="text/css">
body
{
    background-image: url('static/img/bg.jpg');
    background-size:100% 100%;
}
#main
{
    margin:50px 80px 50px 80px;
    background: white;
    padding: 20px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    border-radius:10px;
}
</style>
</head>
<body>
<div id="main">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                UPDATES
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
                    <?php
                    include 'includes/general_functions.php';
                        $db= connect_to_database();
                        if($db->connect_error){
                        echo "<p> 'Sorry, we\'re having some problems' </p>";
                        }else{
                            $result= $db->query("SELECT * FROM updates ORDER BY id DESC");
                            if($result === false){
                                echo "<p style='color: red'> Error occured</p>";
                            }else
                            while($row = $result->fetch_object()){
                                echo 
                                "<span style='padding:5px;font-size:18px;word-wrap:break-word;'><span style='color:#00967f;font-size:16px;font-weight:bold;'>[".$row->date."]:</span>&nbsp&nbsp".$row->details."</span>
                                <br/><br>";
                            }
                        }
                    ?>
                    <br><div style="text-align:center;font-size:20px;">
                    <a href="index.php" style="color:#00967f;"><span class="ion-ios-home"></span> Home</a>
                    <br>
                    <a href="registration_form.php#business" style="color:#00967f;"><span class="ion-android-checkbox-outline"></span> Registration</a>
                </div>
</div>
<script src="static/js/jquery-2.1.3.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/wow.min.js"></script>
    <script src="static/js/owl.carousel.js"></script>
    <script src="static/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>