<?php
    include('../db/db_connect.php');
    include('../db/sql_queries.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/common.css">

</head>
<style>
  /* Styles for the table */
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  .div_table{
    margin: 7%;
  }

</style>
<body>
    <header>
        <div class="nav-div">
            <a href="index.php"><img class="nav-logo" src="../images/logo.png" alt="logo not found"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="div_table">
        <table>
            <thead>
                <tr>
                    <th>Room title</th>
                    <th>Room Price</th>
                    <th>Room type</th>
                    <th>Room availability</th>
                    <th>Room description</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($room_list->num_rows > 0){
                    while($row = mysqli_fetch_array($room_list)) {
                    ?>
                        <tr>
                            <td><?php echo $row['room_title']; ?></td>
                            <td><?php echo $row['room_price']; ?></td>
                            <td><?php echo $row['room_type']; ?></td>
                            <td><?php if($row['room_availability'] == 1){echo "Yes";}else{echo "No";} ?></td>
                            <td><?php echo $row['room_desc']; ?></td>
                            <td>
                                <!-- <button class="filter-submit" style="width: 100%; margin-bottom: 10%;" type="submit">Update</button> -->
                                <button class="book-btn" style="width: 100%;" type="submit">Delete</button>
                            </td>
                        </tr>
                    <?php 
                    }
                }
                ?>
            </tbody>
        </table>
    </section>


    <footer>
        <p>Project Hotel Reservation. Group Rudra, Prachi and Keyur.</p>
    </footer>
</body>
</html>