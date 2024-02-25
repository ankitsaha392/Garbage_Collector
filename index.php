<?php
include("connection.php");
session_start();
if(isset($_SESSION['uname'])){
    $name=$_SESSION['uname'];
}else{
    $name=NULL;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage of EGNOTO</title>
    <link rel="icon" href="./image_GC/egnoto images/logo-green-500 x 500.png" type="image/x-icon">
    <link rel="stylesheet" href="./Style2.css">
</head>
<body>
    <div class="design">
        <header class="header">
            <div class="logo_wri">
                <div class="logo">
                    <img src="./image_GC/EGNOTO_LOGO.jpg" alt="Egnoto_Image" class="Egnoto_Image">
                </div>
                <div class="EGNOTO_div">
                    <p><a class="EGNOTO_a" href="#" target="_blank"><span>EGNOTO</span></a></p>
                </div>
            </div>

            <!-----------------------------------------------------
                Creating NavBar
            -------------------------------------------------------->
            
            <nav class="navbar">
                <div class="hamburger">
                    +
                </div>
                <ul class="NavBar-list">
                    <li><a class="Navbar_link  first" href="" target="_blank">Home</a></li>
                    <li><a class="Navbar_link" href="./product_page.php" target="_blank">Product</a></li>
                    <li><a class="Navbar_link" href="./aboutUs.html" target="_blank">About</a></li>
                    <li><a class="Navbar_link" href="./contactus.html" target="_blank">Contact</a></li>
                    <?php
                    if($name!=NULL){
                    ?>
                    <li><a class="Navbar_link" href="#" target="_blank">Logged in as,<?php echo $name ?></a></li>
                    <li><a class="Navbar_link logout" href="./logout.php" >Log Out</a></li>
                    <?php
                    }else{
                    ?>
                       <li><a class="Navbar_link" href="./sign_in.php" target="_blank">Login or Register</a></li> 
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </header>
    
        <!---------------------------------------------------------------------------
                                            MAIN BODY
        ------------------------------------------------------------------------------>
    
        <main>
            <section class="sec_body">
                <div class="body_main">
                    <div class="body_img">
                        <img src="./image_GC/66516490026-removebg-preview (2) (1) 1.png" alt="" class="img_main">
                    </div>
                    <div class="p1_p2">
                        <div class="p1">
                            <p class="p1_c">Create a Better Future for your Child.</p>
                        </div>
                        <div class="p2">
                            <p class="p2_r">RECYCLING TAKES LITTLE EFFORT ON YOUR PART. BUT MAKES  A BIG DIFFERNCE TO THE WORLD</p>
                        </div>

                        <div class="button_div button_Initiate_hope">
                            <li>
                            <a class="hope-anchor" href="./product_page.html">
                                Initiate Hope
                            </a>
                            </li>
                        </div>
                    </div>
                    
                </div>
            </section>
        </main>
    </div>
    
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
    

    <script src="app.js"></script>
</body>
</html>