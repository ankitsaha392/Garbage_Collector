<?php
    session_start();
    include("check_validity.php");
    include ("connection.php");
    

    $name=$_POST['prod_name'];
    $price=$_POST['prod_price'];

    $quantity1=$_POST['quantity'];
  
    $desc=$_POST['prod_desc'];
    $cat=$_POST['category'];


    if($_FILES['prod_image'])
    {
        $sn= $_FILES['prod_image']['tmp_name']; // find path source
        $an= $cat."-".$name."-".$_FILES['prod_image']['name'];          //find original name
        $dn = "image/".$an;                     // destination
        move_uploaded_file($sn,$dn);

        $qry="INSERT INTO `product_table` (`product_id`, `category_id`, `product_name`, `product_image`, `product_description`) 
                    VALUES (NULL, '$cat', '$name', '$an', '$desc')";
        
        
        $res=mysqli_query($con,$qry);

        if($res==true)
        $_SESSION['msg1']="inserted succesfully";
        else
        $_SESSION['msg2']="Sorry something went wrong";

        header('location:add_product.php');
    }
?>