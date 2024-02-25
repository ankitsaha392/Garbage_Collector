<?php   
        
        include ("connection.php");  
          
      
        $order_id = $_GET['order_id'];
        $sts = $_GET['sts'];

        if($sts != 0){
            $sts++;
        }
        $qry = "UPDATE `order_table` SET `order_status` = $sts  WHERE `order_id`=$order_id;";
        $res=mysqli_query($con,$qry);

        header('location:dashboard.php'); 
?>