<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="../css/common.css">
  <style>
    
    .container-3 {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .error {
      color: red;
      font-size: 0.9em;
      margin-top: -10px;
      margin-bottom: 10px;
    }
    .success {
      color: green;
      font-size: 1.1em;
      margin-top: 10px;
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <?php include('common/navbar.php'); ?>
  </header>

  <main>
    <div class="container-3">
      <h2>Payment Details</h2>
      <form id="paymentForm">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number">
        <div id="cardNumberError" class="error"></div>

        <label for="expiryDate">Expiry Date</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY">
        <div id="expiryDateError" class="error"></div>

        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="Enter CVV">
        <div id="cvvError" class="error"></div>

        <label for="cardName">Name on Card</label>
        <input type="text" id="cardName" name="cardName" placeholder="Enter name on card">
        <div id="cardNameError" class="error"></div>

        <input type="submit" value="Submit Payment">
      </form>
    </div>
  </main>
  
  <?php include('common/footer.php'); ?>
  
  <script src="../js/payment.js"></script>
</body>
</html>