$(window).ready(function() {
//Déclaration des variables globals
let fat_flocon = document.getElementById('flocon-test');
let fat_flocon_content = fat_flocon.innerHTML;
let screen_card = document.getElementById('screen-card');
let screen_card_width = parseInt(window.getComputedStyle(screen_card).getPropertyValue("width"));
let nb_pos_max_bigF = screen_card_width / 70;
let nb_pos_max_bigF_arrondit = Math.round(nb_pos_max_bigF);

// Createur d'oject BigFlocon
function big_flocon(name, id){
  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
  let random_pos_bigF = getRandomInt(nb_pos_max_bigF_arrondit);
  let n_random_pos_bigF = random_pos_bigF * 70;
  this.name = name;
  this.id = id;
  let el_big_flocon = document.createElement('div');
  el_big_flocon.setAttribute('id', id);
  el_big_flocon.classList.add('big-flocon');
  el_big_flocon.style.left = n_random_pos_bigF +'px';
  el_big_flocon.innerHTML = fat_flocon_content;
  screen_card.appendChild(el_big_flocon);
}
// Generateur d'oject BigFlocon
function generator_big_flocon(name){
  this.name = name;
  let nb_big_flocon = 0;
  let id_big_f = 1;
  let pos_big_f = 0;
  let generate_big_flocon = setInterval(function(){
    if (nb_big_flocon < 28) {
      nb_big_flocon += 1;
      id_big_f += 1;
      pos_big_f += 50;
      let create_big_flocon = new big_flocon('bigF', id_big_f);
    }else {
      let stop_generate_big_F = clearInterval(generate_big_flocon);
    }
  },500);
}
//Lancement des Generateur d'object
 let big_flocon_generator = new generator_big_flocon('gbf');

// Createur d'oject BigFlocon
// function big_flocon(name){
//   this.name = name;
//     let el_big_flocon = document.createElement('div');
//     el_big_flocon.classList.add('big-flocon');
//     el_big_flocon.innerHTML = fat_flocon_content;
//     screen_card.appendChild(el_big_flocon);
//
// }

});
