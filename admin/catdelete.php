<?php
    session_start();
    include("check_validity.php");
    include ("connection.php");
   
    $category_id= $_GET['q'];

    $qry1= "SELECT `category_image` FROM `category_table` WHERE `category_table`.`category_id` = $category_id";

    
    $raw = mysqli_query($con,$qry1);
    while($res1=mysqli_fetch_array($raw))
    {
        $file_pointer = "image/".$res1['category_image'];
   
    }
    
    if (!unlink($file_pointer)) {
    echo ("Product image cannot be deleted due to an error");
    }
    else {
    echo ("Product image  has been deleted");
    }

    $qry="DELETE FROM `category_table` WHERE `category_table`.`category_id` = $category_id";
    $res=mysqli_query($con,$qry);

    if($res==true)
    echo "Deleted Succesfully";
    
?>