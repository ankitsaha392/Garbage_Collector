

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register Page</title>
    <link rel="icon" href="./image_GC/egnoto images/logo-green-500 x 500.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sign_up_form_link.css">
</head>
<body>
    <div class="container">
        <div class="formbox">
            <h1 id="title"><span>Sign up</span></h1>
             <form action="sign.php" method="post">
                <div class="input-ground">
                    <div class="input-box" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input class="input" type="text" placeholder="Name" name="name">
                    </div>

                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <input class="input" type="text" placeholder="Mobile No" name="mobile">
                    </div>

                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="input" type="text" placeholder="Email" name="email">
                    </div>

                    <div class="input-box">
                        <i class="fa-solid fa-key"></i>
                        <input class="input"  type="password" placeholder="password" name="pass">
                    </div>
                    <p>Click here to <a href="./sign_in.php">Sign in</a></p>
                    <hr>
                </div>
                <div class="btn_field">
                    <input type="submit" value="submit" class="butt" id="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
   
    <script>
        let SignupBtn=document.getElementById("SignupBtn");
        //let SigninBtn=document.getElementById("SigninBtn");
        let namefield=document.getElementById("namefield");
        let title=document.getElementById("title");
        /*
        SigninBtn.onclick=function(){
            namefield.style.maxHeight="0";
            title.innerHTML="Sing in";
            SignupBtn.classList.add("disable");
            SigninBtn.classList.remove("disable");
        }
*/
        SignupBtn.onclick=function(){
            namefield.style.maxHeight="60px";
            title.innerHTML="Sing up";
            SignupBtn.classList.remove("disable");
            SigninBtn.classList.add("disable");
        }
    </script>
</body>
</html>