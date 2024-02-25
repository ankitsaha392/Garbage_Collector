<?php 
    $order_id = $_GET['order_id'];
    
    include ("connection.php");
    include ("header.php"); 
    
?>

<main>
    <br>

        <?php
        $qry = "SELECT * FROM `order_table` WHERE `order_id`=$order_id";
        $data = mysqli_query($con, $qry);
        $arr=  mysqli_fetch_array($data);
        
        $user_id = $arr["user_id"];
        $qry1 = "SELECT * FROM `user_table` WHERE `user_id`= $user_id";
        $data1 = mysqli_query($con, $qry1);
        $u_arr =  mysqli_fetch_array($data1);
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                   <h3> Order Id : <?php echo $order_id ;?> </h3>
                </div>
                <div class="col-md">
                    Payment Mode : <?php echo $arr["payment_status"];?>
                </div>
                <div class="col col-lg">
                    Date Time : <?php echo $arr["order_time"];?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Name : <?php echo $u_arr["user_name"]; ?>
                </div>
                <div class="col-sm">
                    Address:<?php echo $arr["delivery_addrs"]; ?>
                </div>
                <div class="col-sm">
                    Phone No. : <?php echo $u_arr["user_mobile"]; ?>
                </div>
            </div>
        </div> 
         <br><br>
        <div class="col" align="right">
            <?php 
                                if($arr["order_status"]==0)
                                    {
                                        echo "Unsucessfull Order";
                                    }
                                elseif($arr["order_status"] >= 3)
                                    {
                                        echo "Order Placed";
                                    }
                                else{ ?>
                                     <button class="btn btn-success" name="<?php echo $arr["order_id"]; ?>" onclick='order_fn(this.name, "<?php echo $arr["order_status"]; ?>")'>
                                     
                                     <?php 
                                        if($arr["order_status"]==1)
                                        {
                                            echo "Pending..";
                                        }
                                        elseif($arr["order_status"]==2)
                                        {
                                            echo "Out of Delivary..";
                                        }
                                
                                     ?>
                                    </button>
                                    <button class="btn btn-light" name="<?php echo $arr["order_id"]; ?>" onclick="cancel_fn(this.name)">Cancel </button>
                                <?php } ?>
        </div>
        <br><br><br>
        
        <div>
    <?php
        $qry_d="SELECT * FROM `order_detail_table` WHERE `order_id`=$order_id";
        $data_d=mysqli_query($con,$qry_d);
        while($arr_d=  mysqli_fetch_array($data_d))
        {
    ?>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="image/<?php echo $arr_d['product_image'];?>" height="150px" width="150px"/> 
            </div>
            <div class="col-7">
                <div class="row"> 
                    <div class="col-6"><?php echo $arr_d["product_name"]; ?></div>
                    <div class="col">Product id : <?php echo $arr_d["product_id"]; ?></div>
                </div>
            </div>
            <div class="col">
                order : x<b><?php echo $arr_d["order_qnty"]; ?> bag</b>
            </div>
        </div>
    </div>
    
    <?php } ?>
</div>

    </main>
    
    <?php include ("footer.php");?>