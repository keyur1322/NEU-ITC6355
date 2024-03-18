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

function booking_confirmation(){
  document.getElementById('room_modal').style.display = 'none';
  alert("Your booking is confirmed");
}