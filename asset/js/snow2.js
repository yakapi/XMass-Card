$(document).ready(function(){

//Déclaration Variable Globale
let screen_card = document.getElementById('screen-card');
let neige_1 = $("#neige1").html();
let neige_2 = $("#neige2").html();

//Createur d'object neige
function neige(name, direct){
  this.name = name;
  let neige_block = document.createElement('div');
  neige_block.classList.add(direct);
  neige_block.classList.add('ablst');
  neige_block.innerHTML = neige_1;
  screen_card.appendChild(neige_block);
}

// Generateur Frame neige 1
let neige_frame1_left = new neige('snow-left','neige-block1');
let neige_frame1_right = new neige('snow-right','neige-block2');
setTimeout(function(){
  let neige_frame1a_left = new neige('snow-left','neige-block1');
  let neige_frame1a_right = new neige('snow-right','neige-block2');
  setTimeout(function(){
    let neige_frame1b_left = new neige('snow-left','neige-block1');
    let neige_frame1b_right = new neige('snow-right','neige-block2');    
  },13000);
},13000);


});
