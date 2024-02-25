<?php
    session_start();
    include("connection.php");
    if(isset($_POST['ra'])){
        $mail=$_SESSION['mail'];
        $sql="delete from cartTable where username='".$mail."'";
        $res=mysqli_query($con,$sql);
        header("location:product_page.php");
    }
?>