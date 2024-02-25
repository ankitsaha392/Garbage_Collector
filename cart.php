<?php
    session_start();
    include("connection.php");
    if(isset($_SESSION["uname"])){
        if(isset($_POST["sub"])){
            $pid=$_GET["pid"];
            $user=$_SESSION["mail"];
            $sql="insert into cartTable (username,pid) values('$user','$pid')";
            $res=mysqli_query($con,$sql);
            header("location:product_page.php");
        }


    }else{
        header("location:sign_in.php");
    }
?>