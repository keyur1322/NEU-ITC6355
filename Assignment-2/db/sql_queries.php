<?php

$rooms_query = "SELECT * FROM tbl_rooms";
$room_list = $conn->query($rooms_query);

if(isset($_POST['filter_reset'])) {
    $rooms_query = "SELECT * FROM tbl_rooms";
    $room_list = $conn->query($rooms_query);
}

if(isset($_POST['filter_submit'])) { 
    $conditions = [];
    
    if(!empty($_POST['room-type'])) {
        $room_type = $_POST['room-type'];
        $conditions[] = "room_type='$room_type'";
    }
    
    if(!empty($_POST['price-range'])) {
        $price_range = $_POST['price-range'];
        $price_range_parts = explode("-", $price_range);
        $price_min = $price_range_parts[0];
        $price_max = $price_range_parts[1];
        $conditions[] = "room_price BETWEEN $price_min AND $price_max";
    }
    
    if(!empty($_POST['availability'])) {
        $availability = ($_POST['availability'] == 'yes') ? 1 : 0;
        $conditions[] = "room_availability='$availability'";
    }
    
    $where_clause = implode(" AND ", $conditions);
    $filter_query = "SELECT * FROM tbl_rooms";
    
    if(!empty($conditions)) {
        $filter_query .= " WHERE $where_clause";
    }
    
    $room_list = $conn->query($filter_query);

    return $room_list; 
}

if(isset($_POST['alert']) && $_POST['alert'] == 'okay') {
    ?>
    
    <script>
        alert("working");
    </script>
    <?php
}

?>