<?php
include("connection.php");
session_start();
if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from user_table where user_mail='".$email."' and password='".$pass."'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    $res=mysqli_fetch_array($result);
    if($num>0){
        $_SESSION['uname']=$res['user_name'];
        $_SESSION['mail']=$res['user_mail'];
        header("location:index.php");
    }
    else{
        echo "<script>alert('login failed'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user sign in</title>
    <link rel="icon" href="./image_GC/egnoto images/logo-green-500 x 500.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>

    <div class="container">
        <div class="formbox">
            <h1 id="title"><span>Sign in</span></h1>
            <form action="" method="post">
                <div class="input-ground">
                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="input" type="email" placeholder="Email" name="email">
                    </div>

                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <input class="input" name="pass" type="password" placeholder="password">
                    </div>
                   
                </div>
               
                <div class="btn_field">
                    <input type="submit" class="sing" name="sub" value="Sign In">
                </div>
                <div class="new_user">
                    <p>New User?<a href="./sign_up.php">Sign Up</a></p>
                    <hr>
                </div>
                
            </form>
           
        </div>
    </div>
   
    </script>
</body>
</html>