<?php
 session_start();
 include("check_validity.php");
 include ("connection.php");
 include ("header.php");
?>

    <main>
        <h1 class="section1">
            Welcome to Dashboard
        </h1>
        
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Sl no. </th>
            <th scope="col">Order Id</th>
            <th scope="col">User Id</th>
            <th scope="col">Delivery Address</th>
           
            <th scope="col">Payment Status</th>
            <th scope="col">Order Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $i=1;
                    $qry="SELECT * FROM `order_table` ORDER BY `order_time` DESC";
                    $data=mysqli_query($con,$qry);
                    while($arr=  mysqli_fetch_array($data)){ ?>
                     <tr>
                     <th scope="row"><?php echo $i; ?></th>
                        <td><a href="order_details.php?order_id=<?php echo $arr["order_id"]; ?>"><?php echo $arr["order_id"]; ?></a></td>
                        <td><?php echo $arr["user_id"]; ?></td>
                        <td><?php echo $arr["delivery_addrs"]; ?></td>
            
                        <td><?php echo $arr["payment_status"]; ?></td>
                        <td> <?php 
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
                            
                        </td>
                        <?php $i++; ?>
                    <?php  } ?>
                    </tr>
        </tbody>
        </table>
        
    </main>
        
<?php include ("footer.php");?>