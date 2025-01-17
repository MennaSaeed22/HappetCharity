<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    $user_data= check_login($con);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--css-->
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/donation.css">
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
    <title>donation</title>
</head>
<body>
    <header id="navbar" class="navbar">
    <div class="sidemenu"> 
            <span class="fa-solid fa-bars color-w  menu " id="open"></span>
            <span class="fa-solid fa-xmark color-w menu hide" id="close" style="z-index:200;padding-top:10px;"></span>
        <div class="cont hide">
            <ul>
                <li><a class="color-w "  href="index.php" target="_blank">Home</a></li>
                <li><a class="active " href="#">donation</a></li>
                <li><a class="color-w  " href="shop.php" target="_blank">online shopping</a></li>
                <li><a class="color-w " href="logout.php">log out</a></li>
                <li><a class="color-w " href="index.php#contactUs" target="_blank">contact us</a</li>
            </ul>
        </div>
    </div> 
    
        <nav>
            <div class="container border ">
                <span id="logo">Hap<a id="logo-pet">pet</a></span>
                <span class="nav-link"><a class="color-b" href="index.php#contactUs" target="_blank">contact us</a></span>
                <span class="nav-link"><a class="color-b" href="logout.php" target="_blank">log out</a></span>
                <span class="nav-link"><a class="color-b" href="shop.php" target="_blank">online shopping</a></span>                
                <span class="nav-link"><a class="active" href="#">donation</a></span>
                <span class="nav-link"><a class="color-b" href="index.php" target="_blank">Home</a></span>
            </div>
        </nav>
    </header>
    <div class="hold">
        <form action="donation_database.php" method="post">
                <h3>donate now</h3>
            <div class="inputvalue">
                <span>card number</span>
                <input type="text" class="card-number-input" name="cart_number" id="">
            </div>
            <div class="inputvalue">
                <span>card holder</span>
                <input type="text" class="card-holder-input" name="card_holder" id="">
            </div>
            <div class="inputvalue">
                <span>donate</span>
                <input type="text" class="donate" name="donate_vlaue" id="" placeholder="$">
            </div>
            <div class="flexbox">
                <div class="inputvalue">
                    <span>expiration mm</span>
                    <select name="month" id="" class="month-input">
                        <option value="month" selected disabled>month</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="inputvalue">
                    <span>expiration yy</span>
                    <select name="year" id="" class="year-input">
                        <option value="year" selected disabled>year</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2030">2031</option>
                        <option value="2030">2032</option>
                        <option value="2030">2033</option>
                    </select>
                </div>
                <div class="inputvalue">
                    <span>cvv</span>
                    <input class="cvv-input" type="text" maxlenght="3" name="cvv">
                </div>
            </div>
            <input type="submit" value="submit" class="submit-btn">
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