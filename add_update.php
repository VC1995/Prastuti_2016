 <?php
 include 'includes/general_functions.php';

 if(!isset($_SESSION)){
        session_start();
}
 if( !isset($_SESSION['logged_in']) ){
        redirect('update_login.php');
    }

if ( isset($_POST['submit']) ){
    $db= connect_to_database();
    if($db->connect_error){
        die("Sorry, we're having some problems");
    }else{
        $update_details= trim($_POST['update_details']);
        $today= getdate();
        $date= $today['mday']."/".$today['mon']."/".$today['year'];
        $ins= $db->prepare("INSERT INTO updates(details,date) VALUES(?,?)");
        if($ins != false){
            $ins->bind_param('ss',$update_details,$date);
            $ins->execute();
            if($ins === false){
                die("Couldn't insert data");
            }else{
                redirect('update_form.php');
            }
        }else{
            die("Couldn't prepare statement");
        }   
    }
}
else {
    die("Some error occured !");
}

 ?>