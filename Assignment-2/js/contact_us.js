// Contact Us page script
function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();

    var isValidEmail = validateEmail(email);

    if (name === '') {
      alert('Please enter your name.');
    }
    else if (email === '') {
      alert('Please enter your email address.');
    }
    else if(!isValidEmail){
      alert('Please enter a valid email address.');
    }
    else if (message === '') {
      alert('Please enter your message.');
    }
    else{
      alert('Thank you for contacting us!');
      document.getElementById("contactForm").reset();
    }
  }

  function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }