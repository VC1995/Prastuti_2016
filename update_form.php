<?php
include 'includes/general_functions.php';
    if(!isset($_SESSION)){
        session_start();
    }
    if( !isset($_SESSION['logged_in']) ){
        echo $_SESSION['logged_in'];
        redirect('update_login.php');
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
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">
    <div class="container">
    <h1 class="text-center"> Updates </h1>
    <p class='row pull-right'><a href='update_logout.php'>Logout</a></p>
    <br/>
    <h3> Add update </h3>
    <form action="add_update.php" method="POST">
        <fieldset>
            <label>Update details : </label><br/>
            <textarea id="update_details" class="longInput" name="update_details" rows="5" cols="100" required></textarea>
        </fieldset>
        <br/>
        <button type="submit" class="btn btn-success" name="submit" value="Submit">DONE</button>
    </form>
    <br/>
    <h3> Delete Updates </h3>
    
    <?php

    $db= connect_to_database();
    if($db->connect_error){
    echo "<p> 'Sorry, we\'re having some problems' </p>";
    }else{
        $result= $db->query("SELECT * FROM updates");
        if($result === false){
            echo "<p style='color: red'> Error occured</p>";
        }else
        while($row = $result->fetch_object()){
            echo "
            <span>[".$row->date."] : ".$row->details."</span>
            <a href='delete_update.php?id=".$row->id."'' style='color: red;'> Delete</a>
            <br/><br/>";
        }
    }
    ?>

    </div>
    <!-- All the scripts -->
    <script src="static/js/jquery-2.1.3.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body>
</html>