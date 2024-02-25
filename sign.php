<?php
include 'connection.php';
session_start();
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $mob=$_POST["mobile"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql="insert into user_table(user_name,user_mobile,user_mail,password) values('$name','$mob','$email','$pass') ";
    $res=mysqli_query($con,$sql);
    $_SESSION["uname"]=$name;
    $_SESSION["mail"]=$email;
    header("location:index.php");
}
?>