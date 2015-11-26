 <?php
 if(!isset($_SESSION)){
        session_start();
}
 if( !isset($_SESSION['logged_in']) ){
        header('Location: update_login.php');
    }

if ( isset($_POST['submit']) ){
    $db= new mysqli('127.0.0.1','root','','prastuti16');
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
                header('Location: update_form.php');
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