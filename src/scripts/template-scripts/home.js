//Section question    
function openCloseDetails(event) {
    if (event.target.classList.contains('question__btn')){  
      let answer = event.target.closest('.question__column').querySelector('.question__answer');
      answer.classList.toggle('opened');

      let openQuestion = event.target.closest('.question__column').querySelector('.question__btn');
      openQuestion.classList.toggle('question-minus')
    }
  };
  
document.querySelector('.question').addEventListener("click", openCloseDetails); 


// Section home-projects, add swiper 
new Swiper('.home-projects-slider', {     
  loop: true,
  autoHeight: false,    
  watchOverflow: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,    
  },   
    
  breakpoints: {
      320: {
          slidesPerView: 1, 
          spaceBetween: 20, 
          padding: 24,                
      },
      768: {
          slidesPerView: 4,
          spaceBetween: 20,  
          autoWidth: false,                  
      },
      992: {
          slidesPerView: 4,
          spaceBetween: 30, 
      },
  }
});
