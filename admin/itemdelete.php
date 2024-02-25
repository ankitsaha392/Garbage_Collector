<?php
    session_start();
    include("check_validity.php");
    include ("connection.php");
   
    $Product_id= $_GET['q'];

    $qry1= "SELECT `product_image` FROM `product_table` WHERE `product_table`.`product_id` = $Product_id";

    
    $raw = mysqli_query($con,$qry1);
    while($res1=mysqli_fetch_array($raw))
    {
        $file_pointer = "image/".$res1['product_image'];
   
    }
    
    if (!unlink($file_pointer)) {
    echo ("Product image cannot be deleted due to an error");
    }
    else {
    echo ("Product image  has been deleted");
    }

    $qry="DELETE FROM `product_table` WHERE `product_table`.`product_id` = $Product_id";
    $res=mysqli_query($con,$qry);

    if($res==true)
    echo "Deleted Succesfully";
    
?>