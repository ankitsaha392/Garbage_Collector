<?php 
session_start();
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>product buy from Egnoto</title>
<link rel="icon" href="./image_GC/egnoto images/logo-green-500 x 500.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="product_page.css">

</head>
<body>
<header>

<div class="out">
<div class="navbar">
<div class="nav_logo border">
<div class="logo">
    <img class="img_logo" src="./image_GC/green_logo-removebg-preview.png" alt="egnoto_logo">
</div>
<div class="EGNOTO_div">
<p><a  class="EGNOTO_a" href="#" target="_blank"><span>EGNOTO</span></a></p>
</div>
</div>
<div class="user">
<?php
if(isset($_SESSION["uname"])){
echo "Logged in as,".$_SESSION["uname"];
}else{
?>
<a href="sign_in.php">Sign In</a>
<?php
}
?>

</div>

</div>

<!----------------------------------------------------------
                Panel 2
--------------------------------------------------------------->

<div class="panel">
<div class="panel_first">
<ul class="panel_ops">
    <p class="hi"><span>Hi,</span></p>
    <p class="hi"><span>let’s Contribute towards the Future</span></p>
</ul>
</div>
<div class="border-remover">
<div class="Home">
    <a href="./index.php">
        <img src="./image_GC/egnoto images/icon-home-green-128 x 128.gif" alt="">
    </a>
    
</div>
</div>
</div>

</div>

</header>

<!-----------------------------------------------------------
    HERO section
-------------------------------------------------------->

<div class="hero_sec">
    <div class="shop_section_div">
    <?php
    $qry="SELECT * FROM `product_table`";
    $data=mysqli_query($con,$qry);
    while($arr=  mysqli_fetch_array($data))
    {
    $pid=$arr["product_id"];
    ?>
        <div class="box6 box">
            <div class="box-img">
            <img src="admin/image/<?php echo $arr['product_image'];?>" alt="<?php echo $arr["product_name"]; ?>">
            </div>
            <div class="h2_pa">
            <h2><?php echo $arr["product_name"]; ?></h2>
            <div class="pa">
        <a href=""><p><?php echo $arr["product_description"]; ?></p></a>
        <form action="cart.php?pid= <?php echo $pid  ?>" method="post">
        <input type="submit" name="sub" class="Add-Cart" onclick="fun(1)" value="Add to Cart">
        </form>

        </div>

    </div>
</div>

<?php } ?>

<div class="cart">
<img src="./image_GC/egnoto images/icon-cart-128 x 128.png" alt="">
<span>
<?php
if(isset($_SESSION["uname"])){
$mail=$_SESSION["mail"];
$cartQuery="select * from cartTable where username='".$mail."'";
$r=mysqli_query($con,$cartQuery);
$c=mysqli_num_rows($r);
echo $c; 
}else{
    echo "NA";
}
                            
?>

</span>
</div>



</div>

<?php
if(isset($_SESSION["uname"])){
?>
<div class="checkout1">
    <p class="cross">
    <!-- <i class="fa-solid fa-square-xmark"></i> -->
    &#10060
    </p>
    <div class="checkout">

    <form class="i-order" action="removeall.php" method="post">
            <p>Order Details</p>
            <span><input type="submit" name="ra" value="Remove All"></span> 
    </form>
    <?php

    $mail=$_SESSION["mail"];
    $check="select * from cartTable where username='".$mail."'";
    $result=mysqli_query($con,$check);
    $totalCartValue=0;
    while($arr=mysqli_fetch_array($result)){
        $pid=$arr["pid"];
        $totalCartValue=$totalCartValue+1;
        $checkProduct="select * from product_table where product_id='".$pid."'";
        $res=mysqli_query($con,$checkProduct);
        $product=mysqli_fetch_array($res);
        $name=$product["product_name"];
        $_SESSION['pid']=$pid;
            ?>
            <form class="i-order" action="remove.php" method="post">
            <p><?php echo $name;  ?></p>
            
            <span><input type="submit" name="remove" value="Remove"></span> 
        </form>
        
        

    <?php
    }
    if($totalCartValue>0){
    ?>
    <form class="addressClass" action="order-table.php" method="post">
            <div class="text">
            <label for="">Address</label> 
            <div class="ta">
            <textarea name="address" id="" cols="30" rows="10" required></textarea>
            <p>...</p>
            </div>
            </div>
            
            
        <input type="submit" name="place" value="Place Order">
        </form>


    <?php
    }
    else{
        echo "<br><br><br><h1>No item in the cart</h1>";
    }
    }
    ?>
    </div>
</div>



<!------------------------------------------------------------------------------
                Footer
------------------------------------------------------------------------------->    
<footer>
        <div class="foot-logo">
            <img src="./image_GC/green_logo-removebg-preview.png" alt="Egnoto LOGO">
            <h1>EGNOTO</h1>
        </div>
        <div class="custSuport">
            <li><h3>Navigation Link</h3></li>
          <li><a href="./aboutUs.html">About Us</a></li> 
          <li><a href="./product_page.php">Product</a></li> 
          <li><a href="./contactus.html">Support</a></li> 
          <li><a href="./sign_in.php">Login</a></li> 
        </div>
        <div class="custService">
            Maintained and &#169; Copyright by EGONOTO Team
        </div>
        <div class="sitemap">
        <a href="./sitemap.html">SiteMap</a>    
        
        </div>
        
</footer>




<!----------------------
img slider
------------------>


<script src="product.js"></script>       
</body>
</html>