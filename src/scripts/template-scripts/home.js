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
