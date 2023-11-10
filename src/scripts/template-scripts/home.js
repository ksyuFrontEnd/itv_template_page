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
      },
      768: {
          slidesPerView: 4,
          spaceBetween: 20,                              
      },
      992: {
          slidesPerView: 4,
          spaceBetween: 30, 
      },
  }
});

// Section home-services, add swiper 
new Swiper('.home-services-slider', {     
  loop: true,
  autoHeight: false,    
  watchOverflow: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,    
  }, 
  enabled: false,  
  breakpoints: {        
      768: {
          enabled: true,
          slidesPerView: 2.5,          
      },
      992: {          
          slidesPerView: 3.5, 
          enabled: true,                
      },
      1280: {          
        slidesPerView: 4.5, 
        enabled: true,                
    },
  }
});
