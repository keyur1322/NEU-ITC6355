<?php
    include('../db/db_connect.php');
    include('../db/sql_queries.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/rooms.css">
</head>
<body>
    <header>
        <?php include('common/navbar.php'); ?>
    </header>

    <section class="rooms">
        <p class="rooms-heading-1">OUR ROOMS</p>
        <p class="rooms-heading-2">Explore Our <span>ROOMS</span></p>
        <div class="container-1">
            <div class="filter-section">
                <form class="filter-form" method="post">
                    <select name="room-type" id="room-type">
                        <option value="">Room Type</option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="suites">Suite</option>
                        <option value="triple">Triple</option>
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
                    <button name="filter_submit" value="filter_submit" class="filter-submit">SUBMIT</button>
                    <button style="margin-left: 1%;" name="filter_reset" value="filter_reset" class="book-btn">RESET</button>
                </form>
            </div>
        
            <div class="room-listings">
                <?php
                $i = 0;
                if($room_list->num_rows > 0){
                    while($row = mysqli_fetch_array($room_list)) {                
                        ?>
                            <div class="room-card">
                            <img class="room-img" id="room_img_<?php echo $i; ?>" src="../images/rooms/<?php echo $row['room_img']; ?>" alt="room image not found">
                            <div class="room-content">
                                <h2 class="card_title_<?php echo $i; ?>"><?php echo $row['room_title'];?></h2>
                                <p class="card_price_<?php echo $i; ?>"><span>Price: </span>$<?php echo $row['room_price'];?> / night</p>
                                <div class="avail_div"><span>Available: </span><p class="card_avail_<?php echo $i; ?>"><?php if($row['room_availability'] == 1){echo "Yes";}else{echo "No";}?></p></div>
                                <div class="avail_div"><span>Room type: </span><p class="card_type_<?php echo $i; ?>"><?php echo $row['room_type']; ?></div>
                                <p class="card_desc_<?php echo $i; ?>"><?php echo $row['room_desc'];?></p>
                                <div class="card-btn">
                                    <button class="view-btn" onclick="open_modal('card_title_<?php echo $i; ?>', 'card_price_<?php echo $i; ?>', 'card_avail_<?php echo $i; ?>', 'card_type_<?php echo $i; ?>', 'card_desc_<?php echo $i; ?>')">VIEW DETAIL</button>
                                    <?php if($row['room_availability'] == 1)
                                    {
                                        ?>
                                        <button class="book-btn" onclick="checkRoomAvailability('card_avail_<?php echo $i; ?>')"><a style="text-decoration: none;" href="payment.html">BOOK NOW</a></button>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            </div>
                        <?php
                        $i++;
                    }
                }else{
                    ?>
                        <h4>Room not found.</h4>
                    <?php
                }  
                ?>
            </div>
            <div class="view-more-div">
                <button class="view-more-btn">VIEW MORE</button>
            </div>
        </div>

        <div class="modal" id="room_modal">
            <div class="modal-content">
              <span class="close" onclick="close_modal()">&times;</span>
                <div class="modal_sub_div">
                    <h1 id="modal_title"></h1>
                    <p id="modal_price"></p>
                </div>
                <div class="avail_div"><span>Room type: </span><p id="modal_type"></p></div>
                <div class="avail_div"><span>Available: </span><p id="modal_avail"></p></div>
                <p id="modal_desc"></p>
                <div class="modal-buttons">
                    <button id="btn_avail" class="book-btn"><a style="text-decoration: none;" href="payment.html">BOOK NOW</a></button>
                    <p id="txt_not_avail">Sorry the room in not available right now. Please check again later!</p>
                </div>
            </div>
    </section>
    <?php include('common/footer.php'); ?>

    <script src="../js/rooms.js"></script>
</body>
</html>