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

    <title>happet charity</title>
</head>
<body>
<div class="main-cont">
    <header id="navbar" class="navbar">
    <div class="sidemenu"> 
            <span class="fa-solid fa-bars color-w  menu " id="open"></span>
            <span class="fa-solid fa-xmark color-w menu hide" id="close" style="z-index:200;padding-top:10px;"></span>
        <div class="cont hide">
            <ul>
                <li><a class="active "  href="#">Home</a></li>
                <li><a class="color-w " href="donation.php" target="_blank">donation</a></li>
                <li><a class="color-w " href="shop.php" target="_blank">online shopping</a></li>
                <li><a class="color-w " href="logout.php">log out</a></li>
                <li><a class="color-w " href="#contactUs">contact us</a</li>
            </ul>
        </div>
    </div> 
    
        <nav>
            <div class="container border ">
                <span id="logo">Hap<a id="logo-pet">pet</a></span>
                <span class="nav-link"><a class="color-w" href="#contactUs">contact us</a></span>
                <span class="nav-link"><a class="color-w" href="logout.php">log out</a></span>
                <span class="nav-link"><a class="color-w" href="shop.php" target="_blank">online shopping</a></span>                
                <span class="nav-link"><a class="color-w" href="donation.php" target="_blank">donation</a></span>
                <span class="nav-link"><a class="active" href="#">Home</a></span>
                <span class="color-w" style="margin-left:50px;font-size:1.3em;"><i class="fa-solid fa-circle-user" style="margin-right: 15px;"></i>Hello, <?php echo $user_data["user_name"] ; ?></span>
            </div>
    
        </nav>
    </header>
    <div class="slider">
        <!-- slider 1 -->
        <div class="myslider fade" style="display: block;">
            <div class="text">
                <h1> Happet Charity</h1>
                <p>Alone we can do so little <br> together we can do so much</p>
            </div>
            <img src="img/cats/glowing-butterfly-wallpaper.jpg" alt="background1" width="100%" height="100%">
        </div>
        <!--slider 2  -->
        <div class="myslider fade">
            <div class="text">
                <h1> Happet Charity</h1>
                <p>Alone we can do so little <br> together we can do so much</p>
            </div>
            <img src="img/cats/89076-cat.jpg" alt="background2" width="100%" height="100%">
        </div>
        <!-- slider 3 -->
        <div class="myslider fade">
            <div class="text">
                <h1> Happet Charity</h1>
                <p>Alone we can do so little <br> together we can do so much</p>
            </div>
            <img src="img/cats/d36dcbbf8fbb6b9e91101c8f0da1bd7c-700.jpg" alt="background3" width="100%" height="100%">
        </div>        
        <!-- slider 4 -->
        <div class="myslider fade">
            <div class="text">
                <h1> Happet Charity</h1>
                <p>Alone we can do so little <br> together we can do so much</p>
            </div>
            <img src="img/cats/5111682.jpg" alt="background4" width="100%" height="100%">
        </div>
        <!-- slider 5 -->
        <div class="myslider fade">
            <div class="text">
                <h1> Happet Charity</h1>
                <p>Alone we can do so little <br> together we can do so much</p>
            </div>
            <img src="img/cats/R (2).jpeg" alt="background5" width="100%" height="100%">
        </div>
            <a  class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a  class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dotbox">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <button id="up"><i class="fa-solid fa-angles-up"style='font-size: 1.5em;'></i></button>
    <!--welcome to happet  -->
    <div class="welcome">
        <div class="container">
            <div class="paws">
                <i class="fa-solid fa-paw first"></i>
                <i class="fa-solid fa-paw second"></i>
                <i class="fa-solid fa-paw third"></i>
            </div>
            <h2>Welcome to Happet charity</h2>
            <p> 
                Far far away, behind the word mountains,
                far from the countries Vokalia and Consonantia,
                there live the blind texts
            </p>        
        </div>
    </div>
    <!-- Kitten Care section -->
        <div class="box">
            <div class="container">
                <div class="care">    
                    <div class="image">
                        <img id="img1" src="img/cats/copy-space-male-cat-wearing-fur-cap_23-2148348033.jpg" alt="cat" width="90%">
                        <div class="shap"></div>
                        <img id="img2" src="img/cats/ragdollbreedcatfacecloseup_282911415.jpg" alt="cat" width="70%">
                    </div>
                    <div class="text">
                        <h2>Kitten Care</h2>
                        <h3>Healthy Cats Guide</h3>
                        <p>Your new kitten deserves the best possible start in life. Learn about kitten nutrition, litter training, vaccinations, and more</p>
                        <form action="shop.html" target="_blank">
                            <button id="shop-btn">shop now</button>
                        </form>
                    </div>        
                </div>       
            </div> 
        </div>
    <!-- product slider -->
    <section class="product">
        <h2 class="product-category">best selling</h2>
        <button class="pre-button"><p>&#10094;</p></button>
        <button class="next-button"><p>&#10095;</p></button>
        <div class="product-container">
        
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/beaphar-calming-home-spray-4jxv.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">beaphar</h2>
                    <p class="description">calming home spray</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/bewi cat.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">bewi cat</h2>
                    <p class="description">250gm dry food</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/friskies.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">friskies</h2>
                    <p class="description">150 gm</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/kitten-royal-canin-555x650.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">royal canin</h2>
                    <p class="description">kitten dry food</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/Piper Cat.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">piper cat</h2>
                    <p class="description">dry food</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/Plaque-off-Animal-60g_1.jpg" alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Plaque off</h2>
                    <p class="description">60gm</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>            
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/teddy original salmon.jpg.jpeg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">teddy salmon</h2>
                    <p class="description"> 150gm liqued food</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/whiskas.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">whiskas</h2>
                    <p class="description"> 130gm liqued food</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/s-l640.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">sprosit</h2>
                    <p class="description">35 Tablets</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/YuMOVE-ADVANCE-Joint-Supplement-for-Cats-60-Tablets_1.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">yumove advance</h2>
                    <p class="description">60 Tablets</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/royal-canin-persian-kitten-new-main-555x650.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">royal kitten</h2>
                    <p class="description">persian kitten new</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div> 
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/Feliway-Optimum-Diffuser-30-Day-Refill-For-Cats-48ml_1.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Optimum Diffuser</h2>
                    <p class="description">Feliway 30 Day Refill 48ml</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="img/products/off-50/Royal Canin Satiety Weight Management Gravy 85g.jpg"alt="product" width="250px">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">royal canin</h2>
                    <p class="description">Management Gravy 85g</p>
                    <span class="price">$20</span>
                    <span class="act-price">$40</span>    
                </div>
            </div>             
        </div>
    </section>        
    
    <!-- about us section -->
    <div class="curved upper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 225"><path fill="#fff" fill-opacity="1" d="M0,160L80,144C160,128,320,96,480,101.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    </div>
    <div class="curved">
        <div class="container ">
            <h2>About Us</h2>
            <p>      
                happet charity was born out of a collective belief that 
                the world is a place where compassion for others,
                appreciation of our interconnectedness, 
                and honoring the intrinsic value of every individual
                culminates in empowering everyone. To accomplish this,
                we must strive to understand each other in new ways that
                brings to light what we previously did not see.
                In today's push towards evidence-based decision making,
                welfare and healthcare providers are in need of an evaluation
                system that is holistic in nature,
                in order to gain accurate interpretation of the numerous
                elements responsible for health and well-being.
                Seeing this unmet need, AWI was formed to fulfill
                this need and leverage the positive gains that wellness
                brings to animals, people and the planet
            </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 225"><path fill="#fff" fill-opacity="1" d="M0,160L80,144C160,128,320,96,480,101.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>
    <!-- cat shelter -->
    <div class="shelter">
        <div class="container">
            <div class="cats">
                <div class="heading">
                    <h2>cat's shelter</h2>
                    <p>
                        this cats have been rescued from death in the
                        street you can read their story
                    </p>
                </div>
            </div>
            <!-- cats -->
            <div class="box">
            <!-- cat1 -->
                <div class="cat">
                    <img src="img/cats/cat1.jpg" alt="cat" width="950px">
                <p>
                <span class="name">bob</span>bob wasn't the prettiest little guy as &frac34; of his tail was
                necrotic but it was his personality that caught my attention.
                </p>
            </div>
            <h2>bob</h2>
        </div>
    <!-- cat2 -->
    <div class="box">
    <div class="cat reverse">
        <img src="img/cats/Kitty.jpg" alt="cat">
        <p>
        <span class="name">Bernie</span>Bernie for one little kitten,a first
            impression was definitely the lasting impression
                that saved his life
        </p>
    </div>
    <h2 class="rev">Bernie</h2>
    </div>
    <!-- cat3 -->
    <div class="box">
        <div class="cat">
            <img src="img/cats/R.jpg" alt="cat">
            <p>
            <span class="name">Mocha</span>Mocha This lucky little girl 
            came to us from the City of Edmonton Animal Control and now has
            a wonderful home with Vic and Irene Ledsham!
            </p>
        </div>
        <h2>Mocha</h2>
    </div>
</div>
</div>
    <!-- gallery -->
    <div class="contain">
        <h2>cats gallary</h2>
        <div class="img-cont">      
        <div class="image"><img src="img/gallery/4.jpg" alt="cat"></div>            
        <div class="image"><img src="img/gallery/7.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/8.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/9.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/11.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/14.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/15.jpg" alt="cat"></div>    
        <div class="image"><img src="img/gallery/16.jpg" alt="cat"></div>    
        </div>
        <div class="pop-up">
            <span>&times;</span>
            <img src="img/gallery/4.jpg" alt="cat">
        </div>
    </div>
</div>
    <!-- contact -->
<div class="contact-container" id="contactUs">
    <div class="contactUs" >
        <div class="title"><h2>Get in Touch</h2></div>
        <div class="box">
            <!-- form -->
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" name="" id="" placeholder="user name">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" name="" id="" placeholder="last name">
                            </div>                            
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" name="" id="" placeholder="username@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input type="tel" name="" id="" placeholder="+20 1234 5678">
                            </div>                            
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="" id="" placeholder="write your message here"></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- info -->
            <div class="contact info">
                <h3 style="color: #fff;">Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>cairo,7 gamal Abdnaser str</p>
                    </div>
                    <div>
                        <span><a href="mailto:Happet@gamil.com"> <i class="fa-solid fa-envelope"></i></a></span>
                        <a href="mailto:Happet@gamil.com">Happet@gamil.com</a>
                    </div>
                    <div>
                        <span><a href="tel:+021234567891"><i class="fa-solid fa-phone"></i></a></span>
                        <a href="tel:+021234567891">+02 123 456 7893</a>
                    </div>
                    <!-- social -->
                    <ul class="social">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- map -->
            <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3450.1456851218086!2d31.39601048492811!3d30.147250581844943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1671042082440!5m2!1sar!2seg" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
    <!-- footer -->
    <div class="cont-d">
        <div class="donateNow">
            <img src="img/cats/Female-Cat-Names-Feature.jpg" alt="cat">
        </div>
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
    <script src="js/main.js"></script>
</body>
</html>