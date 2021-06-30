<?php
require_once('config.php');

if(isset($_POST['signup'])){
    $firstname         = $_POST['firstname'];
    $lastname          = $_POST['lastname'];
    $username          = $_POST['username'];
    $email             = $_POST['email'];
    $password          = ($_POST['password']);

    // echo $firstname ." " . $lastname . " " . $email . " " . $password;
    $sql ="INSERT INTO users (firstname, lastname, username, email, password) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $username, $email, $password]);

    if($result){
        echo 'Succsfully Saved';
    }else{
        echo 'There were errors while saving the data';
    }
}
?>