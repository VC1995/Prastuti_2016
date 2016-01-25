<?php
if(!isset($_SESSION)){
        session_start();
}
if( isset($_SESSION['logged_in']) ){
    header('Location: update_form.php');
}
$errors= array();
if( isset($_POST['login']) ) {
    $id= trim($_POST['id']);
    $pass= trim($_POST['password']);
    if( $id == "admin" && $pass == "somethingDifficult" ){
        $_SESSION['logged_in']= true;
        header('Location: update_form.php');
        exit();
    }else {
        $errors[]= "Incorrect username/password.";
    }
}
?>
<html lang="en">
<head>
    <title>Prastuti 2016</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/update_login.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body>
    <?php
        foreach($errors as $e){
            echo "<p style='color: red'>".$e."</p>";
        }
    ?>
    <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> 
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"> 
        <div class="modal-dialog"> 
            <div class="loginmodal-container"> 
                <h1>Login to add Updates</h1><br> 
                <form action='update_login.php' method='POST'> 
                    <input type="text" name="id" placeholder="Username"> 
                    <input type="password" name="password" placeholder="Password"> 
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login"> 
                </form> 
            </div> 
        </div> 
    </div>
    <!-- All the scripts -->
    <script src="static/js/jquery-2.1.3.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
</body>
</html>