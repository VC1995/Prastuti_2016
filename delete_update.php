<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if( !isset($_SESSION['logged_in']) ){
        header('Location: update_login.php');
    }

    $db= new mysqli('127.0.0.1','root','','prastuti16');
    if($db->connect_error){
        echo "<p> 'Sorry, we\'re having some problems' </p>";
    }else{
        $id= trim($_GET['id']);
        $del= $db->prepare("DELETE FROM updates WHERE id=?");
        $del->bind_param('i',$id);
        if($del->execute()){
            header('Location: update_form.php');
        }else{
            echo "Some error occured.";
        }
    }  
?>