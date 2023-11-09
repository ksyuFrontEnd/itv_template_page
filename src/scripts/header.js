let line = document.querySelector('.icon-menu');
let links = document.querySelectorAll('.menu__link');
let menu = document.querySelector('.menu__body');
let overlay = document.querySelector('.burger-menu__overlay');
let menuButton = document.querySelector('.menu__btn');
let menuLink = document.getElementById('menu-item-418');

line.addEventListener('click', toogleMenu);
overlay.addEventListener('click', toogleMenu);
menuButton.addEventListener('click', toogleMenu);
menuLink.addEventListener('click', toogleMenu);

function toogleMenu() {
  line.classList.toggle('active');  
  menu.classList.toggle('active');
  document.body.classList.toggle('lock');   
}
