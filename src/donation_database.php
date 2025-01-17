<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
        background:center ;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-image: url('img/cats/glowing-butterfly-wallpaper.jpg');
        }
        .thank{
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        width: 500px;
        height: 500px;
        background-color: rgba(255, 255, 255, 0.7);
        display: grid;
        justify-content: center;
        align-items: center;
        }
        .content{
        font-size: 2em;
        }
        a{
        text-decoration: none;
        color:white;
        margin-left:50px ;
        padding: 25px 30px;
        font-size: 1.5em;
        text-align: center;
        background-color: #19c8fa ;
        }
        
    </style>
</head>
<body>
    <div class="thank">
    <?php
        $cartNumber=$_POST["cart_number"];
        $cartHolder=$_POST["card_holder"];
        $donate=$_POST["donate_vlaue"];
        $month=$_POST["month"];
        $year=$_POST["year"];
        $cvv=$_POST["cvv"];
        
        $connection=new mysqli("localhost","root","","happet");
        
        $stmt=$connection->prepare("insert into donation(card_number,card_holder,donate_value,expiration_mm,expiration_yy,cvv) values(?,?,?,?,?,?)");
        $stmt->bind_param("isiiii",$cartNumber,$cartHolder,$donate,$month,$year,$cvv);
        $stmt->execute();
        echo('<div class="content">Thank you for your helping</div>');
    ?>
        <div><a href="index.php">return to home page</a></div>    
    </div>
</body>
</html>
