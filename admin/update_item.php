<?php 
    include ("header.php"); 
    session_start();
    include("check_validity.php");
    include ("connection.php");    
    $Product_id= $_GET['q']; ?>
        
        <main>
        <div class= "section1">
        <div class="container text-center">
        <h1 class="heading-1">
         Edit Your Products
        </h1>
        </div>
        <br>
<?php
        $qry="SELECT * FROM `product_table` WHERE `product_table`.`product_id` = $Product_id";
        $data=mysqli_query($con,$qry);
        while($arr=  mysqli_fetch_array($data))
        { ?>
            <form name="prod_add" action="update_item_process.php?id=<?php echo $Product_id ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm">
                        <img src="image/<?php echo $arr['product_image'];?>" height="150px" width="150px"/>
                    </div>
                </div>
                <label for="inputname" class="form-label" >Product Name</label>
                <input type="text" name="prod_name" class="form-control" value="<?php echo $arr['product_name'];?>">
                    
                            
                            <br>
                           
                            <div class="mb-3">
                            <label for="inputname" class="form-label" >Product Description</label>
                            <textarea name="prod_desc" class="form-control" row='5' placeholder="Enter Product Description"><?php echo $arr["product_description"]; ?></textarea>
                            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      <?php  }
?>
</main>
<?php include ("footer.php");?>
