let line = document.querySelector('.icon-menu');
let links = document.querySelectorAll('.menu-item');
let menu = document.querySelector('.menu__body');
let overlay = document.querySelector('.burger-menu__overlay');
let menuButton = document.querySelector('.menu__btn');

line.addEventListener('click', toogleMenu);
overlay.addEventListener('click', toogleMenu);
menuButton.addEventListener('click', toogleMenu);
for (let link of links) { 
  link.addEventListener('click', closeMenu);
}

function toogleMenu() {
  line.classList.toggle('active');  
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');   
}

function closeMenu() {
  line.classList.remove('active');  
  menu.classList.remove('active');
  document.body.classList.remove('lock');   
}
