<?php
include 'includes/general_functions.php';

    if(!isset($_SESSION)){
        session_start();
    }
    if( !isset($_SESSION['logged_in']) ){
        redirect('update_login.php');
    }

    $db= connect_to_database();
    if($db->connect_error){
        echo "<p> 'Sorry, we\'re having some problems' </p>";
    }else{
        $id= trim($_GET['id']);
        $del= $db->prepare("DELETE FROM updates WHERE id=?");
        $del->bind_param('i',$id);
        if($del->execute()){
            redirect('update_form.php');
        }else{
            echo "Some error occured.";
        }
    }  
?>