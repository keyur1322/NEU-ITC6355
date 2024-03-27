document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var cardNumber = document.getElementById('cardNumber').value;
    var expiryDate = document.getElementById('expiryDate').value;
    var cvv = document.getElementById('cvv').value;
    var cardName = document.getElementById('cardName').value;

    // Reset error messages
    document.querySelectorAll('.error').forEach(function(el) {
      el.textContent = '';
    });

    // Validate form fields
    var isValid = true;
    if (!cardNumber) {
      document.getElementById('cardNumberError').textContent = 'Please enter card number';
      isValid = false;
    }
    if (!expiryDate) {
      document.getElementById('expiryDateError').textContent = 'Please enter expiry date';
      isValid = false;
    }
    if (!cvv) {
      document.getElementById('cvvError').textContent = 'Please enter CVV';
      isValid = false;
    }
    if (!cardName) {
      document.getElementById('cardNameError').textContent = 'Please enter name on card';
      isValid = false;
    }

    // If form is valid, show success message
    if (isValid) {
      document.getElementById('paymentForm').reset();
      alert('Payment successful!');
    }
  });