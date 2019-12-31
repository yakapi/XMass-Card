let starsA = $("#starA").html();
let screen_pop = document.getElementById('screen-card');
setTimeout(function() {

  // createur d'object etoile
  function etoile(name,fx,top,left) {
    this.name = name;
    let stars = document.createElement('div');
    stars.classList.add('ablst')
    stars.classList.add('stars-size');
    stars.style.top = top + "px";
    stars.style.left = left + "px";
    stars.innerHTML = starsA;
    stars.classList.add(fx);
    screen_pop.appendChild(stars);
  }


  let screen_size = parseInt(window.getComputedStyle(screen_pop).getPropertyValue("width"));
  let nb_stars_pos = screen_size / 65;

  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
  let timer = 0;
  for (var i = 0; i < nb_stars_pos * 1.5; i++) {
    timer += 500;
    setTimeout(function(){
      let rand_nb_down = getRandomInt(nb_stars_pos);
      let rand_pos_down = rand_nb_down * 65;
      let stars_test = new etoile('staross','down-anim',0,rand_pos_down);
    },timer);
  }


},800);
