let rad_label1 = document.getElementById('rad-label1');
let rad_label2 = document.getElementById('rad-label2');
let encard_radio_card = document.getElementsByClassName('encard-radio-card');

rad_label1.addEventListener('click',function(){
  encard_radio_card[0].style.border = '3px solid #ECA100';
  encard_radio_card[1].style.border = '3px solid rgba(255, 0, 0, 0)';

})
rad_label2.addEventListener('click',function(){
  encard_radio_card[1].style.border = '3px solid #ECA100';
  encard_radio_card[0].style.border = '3px solid rgba(255, 0, 0, 0)';

})
