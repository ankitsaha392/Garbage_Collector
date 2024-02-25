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
         Manege Your Category
    </h1>
</div>
<div>
    <div class="alert alert-danger" role="alert" id= "txtHint"></div>
    <?php
        $qry="SELECT * FROM `category_table`";
        $data=mysqli_query($con,$qry);
        while($arr=  mysqli_fetch_array($data))
        {
    ?>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="image/<?php echo $arr['category_image'];?>" height="150px" width="150px"/> 
            </div>
            <div class="col-7">
                <div class="row"> 
                    <div class="col-6"><?php echo $arr["category_name"]; ?></div>
                    <div class="col">Category id : <?php echo $arr["category_id"]; ?></div>
                </div>
                <div>Status :  <?php echo $arr["category_status"]; ?></div>
            </div>
            <div class="col">
                <br/>
                <input type="button" class="button2" value="Delete" name="<?php echo $arr["category_id"]; ?>" onclick="deletecat_fn(this.name)">
            </div>
        </div>
    </div>
    
    <?php } ?>
</div>
</div>
</main>

<?php include ("footer.php"); ?>