<?php 
    session_start();
    include("check_validity.php");
    include ("connection.php");
    include ("header.php"); 
    
?>

<main>
<div class= "section1">
<div class="container text-center">
     <h1 class="heading-1">
         Manege Your Products
    </h1>
</div>
<div>
    <div class="alert alert-danger" role="alert" id= "txtHint"></div>
    <?php
        $qry="SELECT * FROM `product_table`";
        $data=mysqli_query($con,$qry);
        while($arr=  mysqli_fetch_array($data))
        {
    ?>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="image/<?php echo $arr['product_image'];?>" height="150px" width="150px"/> 
            </div>
            <div class="col-7">
                <div class="row"> 
                    <div class="col-6"><?php echo $arr["product_name"]; ?></div>
                    <div class="col">Product id : <?php echo $arr["product_id"]; ?></div>
                </div>
                
                <div>Product Description : <br><?php echo $arr["product_description"]; ?></div>
            </div>
            
            <div class="col">
                <br/>
                <input type="button" class="button1" value="Edit Item" name="<?php echo $arr["product_id"]; ?>" onclick="update_fn(this.name)">
                <br><br>
                <input type="button" class="button2" value="Delete" name="<?php echo $arr["product_id"]; ?>" onclick="delete_fn(this.name)">
            </div>
        </div>
    </div>
    
    <?php } ?>
</div>
</div>
</main>

<?php include ("footer.php"); ?>