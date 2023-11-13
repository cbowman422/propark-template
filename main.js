
let active = false;

function toggleMenu(){

  active = !active;

  let menu = document.getElementById('menu');
  let hamburger = document.getElementById('hamburger');

  if (active){
    menu.classList.add('active');
    hamburger.classList.add('active');
  } else {
    menu.classList.remove('active');
    hamburger.classList.remove('active');
  }

};



