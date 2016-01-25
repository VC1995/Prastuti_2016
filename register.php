<?php
 include 'includes/general_functions.php';

 $db= connect_to_database();
 if($db->connect_error){
    echo $db->connect_error;
    die('Sorry, we\'re having some problems');
 }

 if(isset($_POST['submit'])){
    $event_name= trim($_POST['event_name']);
    $team_name= trim($_POST['team_name']);
    $college= trim($_POST['college']);
    $team_rep= trim($_POST['member1_name']);
    $email= trim($_POST['member1_email']);
    $mobile= trim($_POST['member1_number']);
    // insert into event's table
    $stmt= "INSERT INTO ".$event_name."(team_name,college,team_rep,email,mobile) VALUES(?,?,?,?,?)";
    $query= $db->prepare($stmt);
    $query->bind_param('sssss',$team_name,$college,$team_rep,$email,$mobile);
    if($query->execute()){
        $query->close();
        // insert into event's team table
        $data= array();
        $data[0]= $team_rep;
        $index= 1;
        $elems= 1;
        foreach($_POST as $x => $value){
            if($value){
                $elems= $elems+1;
            }
        }
        // remove required fields
        $elems = $elems - 7;
        $count= 0;
        // left are additional member names
        foreach ($_POST as $x => $value) {
            $count= $count + 1;
            if($count>6 && $index < $elems){
                $data[$index]= $value;
                $index= $index+1;
            }
        }
        // the extra members are in data, insert into teams table       
        $table_name= $event_name."_teams";
        $query= $db->prepare("INSERT INTO ".$table_name."(name,team_name) VALUES(?,?)");
        $member_name= $data[0];
        $query->bind_param('ss',$member_name,$team_name);
        foreach($data as $d){
            $member_name= $d;
            $query->execute();
        }        
        // close query and db
        $query->close();
        $db->close();
        //echo "Registered!";
        redirect('success.php');
    }else{
        $query->close();
        $db->close();
        die('Couldn\'t register');
    }
 }else{
    die('Form data not recieved. Kindly fill-up the registration form first.');
 }