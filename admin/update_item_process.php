<?php 
 session_start();
 include("check_validity.php");
 include ("connection.php");

    $id= $_GET['id'];
    $name=$_POST['prod_name'];
   

    
    $desc=$_POST['prod_desc'];
   
    

        $qry= "UPDATE `product_table` SET `product_name` = '$name', `product_description`= '$desc'  WHERE `product_table`.`product_id` = '$id'; ";
        
        
        $res=mysqli_query($con,$qry);

        if($res==true)
        $_SESSION['msg1']="Updated succesfully";
        else
        $_SESSION['msg2']="Sorry something went wrong";

        header('location:add_product.php');
  
        

?>