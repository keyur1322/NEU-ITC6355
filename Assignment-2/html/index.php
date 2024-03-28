<?php
    include('../db/db_connect.php');
    include('../db/sql_queries.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <header>
        <?php include('common/navbar.php'); ?>
    </header>

    <main>
        <section class="homepage">
            <h2>Find Your Perfect Stay</h2>
            <p>Book your room now and enjoy a luxurious experience.</p>
            <a href="rooms.php" class="btn">Book Now</a>
        </section>
        <div class="advertisement" id="advertisement">
            <div class="advert_div">
                <p class="advert_title">Click here, to check best deal for you!</p><span class="close" onclick="close_slider()">&times;</span>
            </div>
            <div class="slideshow-container">
                <div class="slides fade">
                    <img class="slider-img" src="../images/slider/slider-img-1.jpeg" alt="slider-img-1-not-found" srcset="">
                </div>
                
                <div class="slides fade">
                    <img class="slider-img" src="../images/slider/slider-img-2.jpg" alt="slider-img-1-not-found" srcset="">
                </div>
                
                <div class="slides fade">
                    <img class="slider-img" src="../images/slider/slider-img-3.jpg" alt="slider-img-1-not-found" srcset="">
                </div>
                
                <div class="dot_div">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                </div>
            </div>
        </div>
        <section class="features">
            <div class="feature">
                <h3>Best Price Guarantee</h3>
                <p>We offer the best prices for your stay, guaranteed.</p>
            </div>
            <div class="feature">
                <h3>24/7 Customer Support</h3>
                <p>Our dedicated support team is available around the clock.</p>
            </div>
            <div class="feature">
                <h3>Easy Booking Process</h3>
                <p>Our booking process is simple and hassle-free.</p>
            </div>
        </section>
    </main>

    <?php include('common/footer.php'); ?>
    
    <script src="../js/index.js"></script>
</body>
</html>
