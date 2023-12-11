<?php

require_once 'connection.php';

$sql="SELECT * from product";
$all_product= $con->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StitchStyle</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">

    

    
</head>
<body>

    <section id="header">
    <a href="#"><img src="img/logo.png" width="250" height="40" class="logo" alt=""></a>

    <div>
        <ul id="navbar">
            <li><a  href="index.html">Home</a></li>
            <li><a class="active" href="shop2.php">Shop</a></li>
            <li><a href="about.html">Despre Noi</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="cart.html"><img src="img/cart.png" width="40" height="40" class="cart" alt=""></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
    </div>



    </section>

    <section id="page-header">
        
        <h4>All your favourite characters</h4>
        
        
        
    </section>
    
    <section id="product1" class="section-p1">

    <?php 
     while( $row = mysqli_fetch_assoc($all_product)){


      ?>
    
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="<?php echo $row["image"];  ?>" alt="">
                <div class="des">
                <h5><?php echo $row["product_name"]; ?></h5> 
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div> 
                <h4><?php echo $row["price"]; ?> lei</h4>  
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            
           
            
        </div>

        <?php


     }
         ?>
        

    </section>
    

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4></h4>
            <p></p>
        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
           <img class="logo" src="img/logo.png" width="150" height="25" alt="">
           <h4> Contact</h4>
           <p><strong>Addres:</strong> Otelu Rosu, Caras Severin, Republicii nr 86</p>
           <p><strong>Phone:</strong>+40 768 932 051</p>
           <p><strong>Hours:</strong>9:00 - 17:00, Mon - Fri</p>
           <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
           </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>