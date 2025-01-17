<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--css-->
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/shop2.css">
        <!--icon-->
    <link rel="icon" href="img/happet.icon">
        <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">        
        <!-- font awosome & boxicons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>online shopping</title>
</head>
<body>
    <header id="navbar" class="navbar">
    <div class="sidemenu"> 
            <span class="fa-solid fa-bars color-w  menu " id="open"></span>
            <span class="fa-solid fa-xmark color-w menu hide" id="close" style="z-index:200;padding-top:10px;"></span>
        <div class="cont hide">
            <ul>
                <li><a class="color-w "  href="index.php" target="_blank">Home</a></li>
                <li><a class="color-w " href="donation.php" target="_blank">donation</a></li>
                <li><a class="active  " href="#">online shopping</a></li>
                <li><a class="color-w " href="logout.php">log out</a></li>
                <li><a class="color-w " href="index.php#contactUs" target="_blank">contact us</a</li>
            </ul>
        </div>
    </div> 
    
        <nav>
            <div class="container border ">
                <span id="logo">Hap<a id="logo-pet">pet</a></span>
                <span class="nav-link"><a class="color-b" href="index.php#contactUs" target="_blank">contact us</a></span>
                <span class="nav-link"><a class="color-b" href="logout.php">log out</a></span>
                <span class="nav-link"><a class="active" href="#">online shopping</a></span>                
                <span class="nav-link"><a class="color-b" href="donation.php" target="_blank">donation</a></span>
                <span class="nav-link"><a class="color-b" href="index.php" target="_blank">Home</a></span>
            </div>
        </nav>
    </header>
    
    <div class="header">
    <div class="container">
        <div class="shop-nav shop-cont">
            <a href="#" class="shop-logo"><span>online</span> shopping</a>
            <i class='bx bx-shopping-bag' id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>
                <div class="cart-content">
                    <!-- <div class="cart-box">
                        <img src="img/products/food/felix kitten.jpg"  alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">bewi cat</div>
                            <div class="cart-price">$28.5</div>
                            <input type="number" min="1" name="" id="" value="1" class="cart-quantity">
                        </div>
                        
                        <i class='bx bxs-trash-alt cart-remove'></i>
                    </div> -->
                </div>
                <div class="total">
                    <div class="total-title">total</div>
                    <div class="total-price">$0.00</div>
                </div>
                <button type="button" class="btn-buy">Buy Now</button>
                <i class='bx bx-x cart-close'></i>
            </div>
        </div>
    </div>
    </div>
    <section class="shop shop-cont">
        <h2 class="shop-title">shop products</h2>
        <div class="shop-content">
        <!-- box 1 -->
            <div class="product-box">
                <img src="img/products/food/bewi cat.jpg" alt="product" class="product-img">
                <h2 class="product-title">bewi cat</h2>
                <span class="product-price">$79.50</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        
        <!-- box 2 -->
            <div class="product-box">
                <img src="img/products/food/felix kitten.jpg" alt="product"  class="product-img">
                <h2 class="product-title">fleix kitten</h2>
                <span class="product-price">$50.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            
        <!-- box 3 -->
            <div class="product-box">
                <img src="img/products/food/friskies.jpg" alt="product" class="product-img">
                <h2 class="product-title">friskies</h2>
                <span class="product-price">$40.35</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            
        <!-- box 4 -->
            <div class="product-box">
                <img src="img/products/food/groovy mix.jpg" alt="product" class="product-img">
                <h2 class="product-title">groovy mix</h2>
                <span class="product-price">$40.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 5 -->
            <div class="product-box">
                <img src="img/products/food/josi cat poultry.jpg" alt="product" class="product-img">
                <h2 class="product-title">josi cat</h2>
                <span class="product-price">$60.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 6 -->
            <div class="product-box">
                <img src="img/products/food/kit & kaboodle .jpg" alt="product" class="product-img">
                <h2 class="product-title">kit & kaboodle</h2>
                <span class="product-price">$150.55</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>            
        <!-- box 7 -->
            <div class="product-box">
                <img src="img/products/food/kitten-royal-canin-555x650.jpg" alt="product" class="product-img">
                <h2 class="product-title">royal canin</h2>
                <span class="product-price">$60.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 8 -->
            <div class="product-box">
                <img src="img/products/food/moggbix salmon.jpg" alt="product"  class="product-img">
                <h2 class="product-title">moggbix salmon</h2>
                <span class="product-price">$200</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 9 -->
            <div class="product-box">
                <img src="img/products/food/Piper Cat.jpg" alt="product" class="product-img">
                <h2 class="product-title">piper cat</h2>
                <span class="product-price">$120.55</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 10 -->
            <div class="product-box">
                <img src="img/products/food/Moggy-1-Chicken-And-Rice-Adult-Cat-Food-1-kg-02.jpg" alt="product"  class="product-img">
                <h2 class="product-title">moggy</h2>
                <span class="product-price">$30.55</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 11 -->
            <div class="product-box">
                <img src="img/products/food/Royal Canin Mother and Baby Cat.jpg" alt="product" class="product-img">
                <h2 class="product-title">kitten royal</h2>
                <span class="product-price">$120.33</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 12 -->
            <div class="product-box">
                <img src="img/products/food/Royal Canin Satiety Weight Management Gravy 85g.jpg" alt="product" class="product-img">
                <h2 class="product-title">Royal Canin Satiety</h2>
                <span class="product-price">$110.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 13 -->
            <div class="product-box">
                <img src="img/products/food/royal-canin-persian-kitten-new-main-555x650.jpg" alt="product"  class="product-img">
                <h2 class="product-title">royal canin persian</h2>
                <span class="product-price">$130.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 14 -->
            <div class="product-box">
                <img src="img/products/food/whiskas.jpg" alt="product" class="product-img">
                <h2 class="product-title">whiskas</h2>
                <span class="product-price">$110.22</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 15 -->
            <div class="product-box">
                <img src="img/products/food/whiskas-tuna-jelly-cat-food-500x500.jpg" alt="product" class="product-img">
                <h2 class="product-title">whiskas tuna</h2>
                <span class="product-price">$210.22</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            
        <!-- litter -->
        
        <!-- box 16 -->
            <div class="product-box">
                <img src="img/products/litter/Bestpets-Cat-Litter-Lightweight-Cat-Litter-30-Litre_PTBESTLW31.jpg" alt="product" class="product-img">
                <h2 class="product-title">Bestpets Litter</h2>
                <span class="product-price">$50.22</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 17 -->
            <div class="product-box">
                <img src="img/products/litter/Bob-Martin-Cat-Litter-Freshener-300ml_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">bob martin</h2>
                <span class="product-price">$40.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 18 -->
            <div class="product-box">
                <img src="img/products/litter/Canac-Cat-Litter-Deodoriser-200g_17839.jpg" alt="product" class="product-img">
                <h2 class="product-title">canac litter</h2>
                <span class="product-price">$70.23</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 19 -->
            <div class="product-box">
                <img src="img/products/litter/Catit-Go-Natural-Wood-Cat-Litter-15-Litres_1.JPG" alt="product" class="product-img">
                <h2 class="product-title">wood litter</h2>
                <span class="product-price">$150.22</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 20 -->
            <div class="product-box">
                <img src="img/products/litter/Kitty-Friend-Wood-Cat-Litter-10-Litre_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">kitty friend</h2>
                <span class="product-price">$60.22</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 21 -->
            <div class="product-box">
                <img src="img/products/litter/Catsan-Hygiene-Plus-Cat-Litter-Cat-Litter-20L_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">hygirne plus</h2>
                <span class="product-price">$30.55</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div> 
        <!-- box 22 -->
            <div class="product-box">
                <img src="img/products/litter/Cats-Best-Smart-Pellet-Clumping-Wood-Cat-Litter-10kg_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">smart pellet</h2>
                <span class="product-price">$120.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 23 -->
            <div class="product-box">
                <img src="img/products/litter/Felight-Cat-Litter-20-Litre_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">flight cat</h2>
                <span class="product-price">$20.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 24 -->
            <div class="product-box">
                <img src="img/products/litter/Sanicat-Classic-Cat-Litter-30-Litre_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Sanicat Classic</h2>
                <span class="product-price">$80.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 25 -->
            <div class="product-box">
                <img src="img/products/litter/Pettex-Pampuss-Wood-Cat-Litter-30L_1.JPG" alt="product" class="product-img">
                <h2 class="product-title">Pettex Pampuss</h2>
                <span class="product-price">$59.99</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 26 -->
            <div class="product-box">
                <img src="img/products/Medicines/beaphar-calming-home-spray-4jxv.jpg" alt="product" class="product-img">
                <h2 class="product-title">beaphar spray</h2>
                <span class="product-price">$220.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 27 -->
            <div class="product-box">
                <img src="img/products/litter/Cats-Best-Smart-Pellet-Clumping-Wood-Cat-Litter-10kg_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">smart pellet</h2>
                <span class="product-price">$120.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 28 -->
            <div class="product-box">
                <img src="img/products/Medicines/Effipro-Duo-Spot-On-Flea-Treatment-For-Cats_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Effipro Duo Spot</h2>
                <span class="product-price">$220.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 29 -->
            <div class="product-box">
                <img src="img/products/Medicines/Feliway-Optimum-Diffuser-30-Day-Refill-For-Cats-48ml_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Feliway Optimum</h2>
                <span class="product-price">$320.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 30 -->
            <div class="product-box">
                <img src="img/products/Medicines/Indorex-Defence-Household-Flea-Spray-500ml_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Indorex Defence</h2>
                <span class="product-price">$120.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 31 -->
            <div class="product-box">
                <img src="img/products/Medicines/Panacur-Paste-Syr-Cat-Dog-5g_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Panacur Paste</h2>
                <span class="product-price">$130.55</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        <!-- box 32 -->
            <div class="product-box">
                <img src="img/products/Medicines/Zylkene-Calming-Capsules-75mg-20-Pack_1.jpg" alt="product" class="product-img">
                <h2 class="product-title">Zylkene Capsules</h2>
                <span class="product-price">$210.44</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>            
        </div>
    </section>
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
<script src="js/shop.js"></script>  
</body>
</html>