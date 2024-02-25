<?php
include("connection.php");
if(isset($_POST['remove'])){
    $id=$_GET['id'];
    $sql="delete from user_table where user_id='".$id."'";
   echo $sql;
    $res=mysqli_query($con,$sql);
    header("location:userTable.php");
}
?>