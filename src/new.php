

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
    <title>New Account</title>
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
        
        <form action="new.php" method="post" name="sign">
                <h3>new account</h3>   
    <?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=$_POST['email'];
        $user_name=$_POST['name'];
        $password=$_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //seve into database
            $site_id = rand(500,1000000);
            $qurey = "insert into new_account(site_id,user_email,user_name,user_password) values('$site_id','$email','$user_name','$password')";
            mysqli_query($con,$qurey);
            header("Location: sign.php");
            die;
            
        }else{
            echo "<div class='inputvalue'><p>Enter valied information<p></div>" ;
        }
    }
    ?>
            <div class="inputvalue">
                <span>email</span>
                <input type="email" class="card-number-input" name="email" id="">
                
            </div>
            <div class="inputvalue">
                <span>user name</span>
                <input type="text" class="card-number-input" name="name" id="">
                
            </div>
            <div class="inputvalue">
                <span>create password</span>
                <input type="password" class="password" name="password" id="">
                
            </div>        
            
                <input type="submit" value="submit" class="submit-btn" name="submit">
                <div class="new-account"> have an account? &nbsp;<a href="sign.php" target="_blank">sign in</a></div>
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
    
    
<!-- <script src="js/sign.js"></script>   -->
</body>
</html>