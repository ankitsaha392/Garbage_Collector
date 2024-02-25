<?php
    
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=='admin' && $password=='1234')
    {
        $_SESSION['admin_id']= '1321';
       header('location: ./dashboard.php');
    }
    else{
        header('location: ./');
    }
    

?>