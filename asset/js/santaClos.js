let name_pop = setInterval(function(){
  let screen_card_santa = document.getElementById('screen-card');
  let santa_clos = document.getElementById('santa-clos');
  let santa_clos_top = parseInt(window.getComputedStyle(santa_clos).getPropertyValue("top"));
  let screen_card_height = parseInt(window.getComputedStyle(screen_card_santa).getPropertyValue("height"));
  let compare18 = screen_card_height*18/100;
  if (santa_clos_top >= compare18 -5) {
    let who_appear = document.getElementById('who-card');
    who_appear.classList.add('ho-ho-L');
    let stop_action = clearInterval(name_pop);
  }
},50);
