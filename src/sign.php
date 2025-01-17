<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--css-->
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/donation.css">
    <link rel="stylesheet" href="style/sign.css">
        <!--icon-->
    <link rel="icon" href="img/happet.icon">
        <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">        
        <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <title>sign in</title>
</head>
<body>
    <header id="navbar" class="navbar">
    <div class="sidemenu"> 
            <span class="fa-solid fa-bars color-w  menu " id="open"></span>
            <span class="fa-solid fa-xmark color-w menu hide" id="close" style="z-index:200;padding-top:10px;"></span>
        <div class="cont hide">
            <ul>
                <li><a class="color-w "  href="index.php">Home</a></li>
                <li><a class="color-w " href="donation.php">donation</a></li>
                <li><a class="color-w  " href="shop.php">online shopping</a></li>
                <li><a class="active " href="#">sign in</a></li>
                <li><a class="color-w " href="index.php#contactUs">contact us</a</li>
            </ul>
        </div>
    </div> 
    
        <nav>
            <div class="container border ">
                <span id="logo">Hap<a id="logo-pet">pet</a></span>
                <span class="nav-link"><a class="color-b" href="index.php#contactUs">contact us</a></span>
                <span class="nav-link"><a class="active" href="#">sign in</a></span>
                <span class="nav-link"><a class="color-b" href="shop.php">online shopping</a></span>                
                <span class="nav-link"><a class="color-b" href="donation.php">donation</a></span>
                <span class="nav-link"><a class="color-b" href="index.php">Home</a></span>
            </div>
        </nav>
    </header>
    <div class="hold">
    
    <form action="" method="post" name="sign">
        <h3>sign in</h3>
        <p class="massege3"> </p>
<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_name=$_POST['name'];
        $password=$_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //read from database
            $qurey = "select * from new_account where user_name ='$user_name' limit 1 ";
            $result = mysqli_query($con,$qurey);
            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data["user_password"]===$password){
                            $_SESSION["site_id"] = $user_data["site_id"];
                            header("Location: index.php");
                            die;
                    }
                }
            }            
            echo "<div class=inputvalue><p>worng password or user name<p></div>"; 
        }else{
            echo "worng password or user name" ;
        }
    }
?>        
            <div class="inputvalue">
                <span>username</span>
                <input type="text" class="card-number-input" name="name" id="">
                <p class="massege1"> </p>
            </div>
            <div class="inputvalue">
                <span>password</span>
                <input type="password" class="password" name="password" id="">
                <p class="massege2"> </p>
            </div>
                <input type="submit" value="submit" class="submit-btn">
                <div class="new-account"> don't have an account? &nbsp;<a href="new.php" target="_blank">New Account</a></div>
        </form>
    </div>
        <footer>
        <div class="footer-content">
            <h3>Happet charity</h3>
            <p>A small donation can make a huge difference</p>
            <ul class="social-footer">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022<span> happet</span></p>
        </div>
    </footer>    
    
    
<script src="js/sign.js"></script>  
</body>
</html>