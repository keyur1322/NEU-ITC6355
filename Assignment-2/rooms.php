<?php
    include('db/db_connect.php');
    include('db/sql_queries.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="nav-div">
            <a href="index.php"><img class="nav-logo" src="./images/logo.png" alt="logo not found"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="rooms">
        <p class="rooms-heading-1">OUR ROOMS</p>
        <p class="rooms-heading-2">Explore Our <span>ROOMS</span></p>
        <div class="container-1">
            <div class="filter-section">
                <form class="filter-form">
                    <select name="room-type" id="room-type">
                        <option value="">Room Type</option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="suite">Suite</option>
                    </select>
                    <select name="price-range" id="price-range">
                        <option value="">Price Range</option>
                        <option value="0-50">$0 - $50</option>
                        <option value="50-100">$50 - $100</option>
                        <option value="100-200">$100 - $200</option>
                        <option value="200+">$200+</option>
                    </select>
                    <select name="availability" id="availability">
                        <option value="">Availability for Today</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <button class="filter-submit">SUBMIT</button>
                </form>
            </div>
        
            <div class="room-listings">
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($room_list)) {                
                ?>
                    <div class="room-card">
                    <img class="room-img" src="./images/hotel-booking.png" alt="room image not found">
                    <div class="room-content">
                        <h2 class="card_title_<?php echo $i; ?>"><?php echo $row['room_title'];?></h2>
                        <p class="card_price_<?php echo $i; ?>"><span>Price: </span>$<?php echo $row['room_price'];?> / night</p>
                        <div class="avail_div"><span>Available: </span><p class="card_avail_<?php echo $i; ?>"><?php if($row['room_availability'] == 1){echo "Yes";}else{echo "No";}?></p></div>
                        <p class="card_desc_<?php echo $i; ?>"><?php echo $row['room_desc'];?></p>
                        <div class="card-btn">
                            <button class="view-btn" onclick="open_modal('card_title_<?php echo $i; ?>', 'card_price_<?php echo $i; ?>', 'card_avail_<?php echo $i; ?>', 'card_desc_<?php echo $i; ?>')">VIEW DETAIL</button>
                            <button class="book-btn" onclick="checkRoomAvailability('card_avail_<?php echo $i; ?>')">BOOK NOW</button>
                        </div>
                    </div>
                    </div>
                <?php
                $i++;
                }
                ?>
                
                
                <!-- <div class="room-card">
                    <img class="room-img" src="./images/hotel-booking.png" alt="room image not found">
                    <div class="room-content">
                        <h2 class="card_title1">Junior Suites</h2>
                        <p class="card_price1"><span>Price: </span>$150 / night</p>
                        <div class="avail_div"><span>Available: </span><p class="card_avail1">No</p></div>
                        <p class="card_desc1">Welcome to our luxurious Junior Suites, where comfort meets elegance. Designed with your utmost satisfaction in mind, our Junior Suites offer a spacious retreat for both leisure and business travelers alike.</p>
                    <div class="card-btn">
                        <button class="view-btn" onclick="open_modal('card_title1', 'card_price1', 'card_avail1', 'card_desc1')">VIEW DETAIL</button>
                        <button class="book-btn" onclick="checkRoomAvailability('card_avail1')">BOOK NOW</button>
                    </div>
                    </div>
                </div>
                <div class="room-card">
                    <img class="room-img" src="./images/hotel-booking.png" alt="room image not found">
                    <div class="room-content">
                        <h2 class="card_title2">Triple room</h2>
                        <p class="card_price2"><span>Price: </span>$200 / night</p>
                        <div class="avail_div"><span>Available: </span><p class="card_avail2">Yes</p></div>
                        <p class="card_desc2">Welcome to our triple rooms, where comfort meets convenience for groups or families seeking a memorable stay. Our spacious triple rooms are thoughtfully designed to accommodate three guests comfortably, offering ample space and modern amenities to ensure a relaxing retreat.</p>
                    <div class="card-btn">
                        <button class="view-btn" onclick="open_modal('card_title2', 'card_price2', 'card_avail2', 'card_desc2')">VIEW DETAIL</button>
                        <button class="book-btn" onclick="checkRoomAvailability('card_avail2')">BOOK NOW</button>
                    </div>
                    </div>
                </div>
                <div class="room-card">
                    <img class="room-img" src="./images/hotel-booking.png" alt="room image not found">
                    <div class="room-content">
                        <h2 class="card_title3">Presidential Suites</h2>
                        <p class="card_price3"><span>Price: </span>$300 / night</p>
                        <div class="avail_div"><span>Available: </span><p class="card_avail3">Yes</p></div>
                        <p class="card_desc3">Each Presidential Suite is meticulously designed to reflect modern elegance and timeless charm, providing guests with a sanctuary of unparalleled luxury. From the moment you step through the door, you'll be enveloped in a world of indulgence and exclusivity.</p>
                    <div class="card-btn">
                        <button class="view-btn" onclick="open_modal('card_title3', 'card_price3', 'card_avail3', 'card_desc3')">VIEW DETAIL</button>
                        <button class="book-btn" onclick="checkRoomAvailability('card_avail3')">BOOK NOW</button>
                    </div>
                    </div>
                </div>
                <div class="room-card">
                    <img class="room-img" src="./images/hotel-booking.png" alt="room image not found">
                    <div class="room-content">
                        <h2 class="card_title4">Double Room</h2>
                        <p class="card_price4"><span>Price: </span>$170 / night</p>
                        <div class="avail_div"><span>Available: </span><p class="card_avail4">No</p></div>
                        <p class="card_desc4">Indulge in comfort and style in our inviting double rooms, designed to provide you with a serene sanctuary during your stay. Whether you're traveling for business or leisure, our thoughtfully appointed accommodations offer everything you need for a relaxing and enjoyable experience.</p>
                    <div class="card-btn">
                        <button class="view-btn" onclick="open_modal('card_title4', 'card_price4', 'card_avail4', 'card_desc4')">VIEW DETAIL</button>
                        <button class="book-btn" onclick="checkRoomAvailability('card_avail4')">BOOK NOW</button>
                    </div>
                    </div>
                </div>
                <div class="view-more-div">
                    <button class="view-more-btn">VIEW MORE</button>
                </div> -->
            </div>
        </div>

        <div class="modal" id="room_modal">
            <div class="modal-content">
              <span class="close" onclick="close_modal()">&times;</span>
                <div class="modal_sub_div">
                    <h1 id="modal_title"></h1>
                    <p id="modal_price"></p>
                </div>
                <div class="avail_div"><span>Available: </span><p id="modal_avail"></p></div>
                <p id="modal_desc"></p>
                <div class="modal-buttons">
                    <button id="btn_avail" class="book-btn" onclick="booking_confirmation()">Book Now</button>
                    <p id="txt_not_avail">Sorry the room in not available right now. Please check again later!</p>
                </div>
            </div>
    </section>
    <script src="script.js"></script>
</body>
</html>