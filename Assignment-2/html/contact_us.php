<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/contact_us.css">
</head>
<body>
  <header>
    <?php include('common/navbar.php'); ?>
  </header>

  <div class="container-2">
    <div class="img-div">
      <img src="../images/contact-us.jpg" alt="img not found">      
    </div>
    <div class="form-div">
      <h2 class="contact-title">Contact Us</h2>
      <form id="contactForm" action="#" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
          <button type="button" onclick="validateForm()">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <?php include('common/footer.php'); ?>
  
  <script src="../js/contact_us.js"></script>
</body>
</html>
