let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000);
}

function open_modal(card_title, card_price, card_avail, card_desc) {
  
  var card_title = document.getElementsByClassName(card_title);
  var card_price = document.getElementsByClassName(card_price);
  var card_avail = document.getElementsByClassName(card_avail);
  var card_desc = document.getElementsByClassName(card_desc);

  var card_title_val = card_title[0].innerHTML;
  var card_price_val = card_price[0].innerHTML;
  var card_avail_val = card_avail[0].innerHTML;
  var card_desc_val = card_desc[0].innerHTML;

  var modal_title = document.getElementById('modal_title');
  var modal_price = document.getElementById('modal_price');
  var modal_desc = document.getElementById('modal_desc');

  modal_title.innerHTML = card_title_val;
  modal_price.innerHTML = card_price_val;
  modal_desc.innerHTML = card_desc_val;

  if(card_avail_val === 'Yes')
  {
    var modal_avail = document.getElementById('modal_avail');
    modal_avail.innerHTML = 'Room is currenly available. Please select date and units in the next process!'
    document.getElementById('txt_not_avail').style.display = 'none';
    document.getElementById('btn_avail').style.display = 'block';

  }else{
    var modal_avail = document.getElementById('modal_avail');
    modal_avail.innerHTML = 'Sorry not available!'
    document.getElementById('txt_not_avail').style.display = 'block';
    document.getElementById('btn_avail').style.display = 'none';
  }
  document.getElementById('room_modal').style.display = 'block';
}
  
function close_modal() {
  document.getElementById('room_modal').style.display = 'none';
}

function close_slider() {
  document.getElementById('advertisement').style.display = 'none';
}

function booking_confirmation(){
  document.getElementById('room_modal').style.display = 'none';
  alert("Your booking is confirmed");
}

function checkRoomAvailability(roomavail) {
  var roomavail = document.getElementsByClassName(roomavail);
  var roomavail_val = roomavail[0].innerHTML;
  
  if(roomavail_val === 'Yes')
  {
    alert('Your booking confirmed! Please complete your payment in the next step.')
  }else{
    alert('Sorry this room is not available!')
  }
}

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