<?php
session_start();
include("connection.php");
if(isset($_POST['remove'])){
    $mail=$_SESSION['mail'];
    $pid=$_SESSION['pid'];
    $sql="delete from cartTable where username='".$mail."' and pid='".$pid."'LIMIT 1";
    $res=mysqli_query($con,$sql);
    header("location:product_page.php");
}   
?>