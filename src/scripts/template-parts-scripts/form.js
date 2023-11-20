const popupSuccess = document.getElementById("popup-success");
const popupMessage = document.querySelector(".popup")
const closeButton = document.querySelector('.popup__close');
const errorPhone = document.querySelector('.error-phone');
const submitButton = document.getElementById("submit-btn");
const wpcf7Element = document.querySelector(".wpcf7");
const telInputEl = document.getElementById("phone");
const nameInputEl = document.getElementById("name");

//validate mask-phone
document.addEventListener( 'wpcf7submit', function( event ) {
    const value = telInputEl.value;
    const pattern = /^[\+]?\d{2}[\s|-]?\(?\d{3}?\)?[\s]?\d{3}[\s|-]?\d{2}[\s|-]?\d{2}$/;
    check = pattern.test(value);
    
    if (!check) {
        errorPhone.innerHTML = "Будь ласка, заповніть це поле.";
        errorPhone.classList.add('wpcf7-not-valid-tip'); 
    } else {
        errorPhone.innerHTML = "";
        errorPhone.classList.remove('wpcf7-not-valid-tip');
    }   
}, false );

//wpcf7mailsent + pop-up
document.addEventListener( 'wpcf7mailsent', function( event ) {
    popupMessage.classList.add('opened');
    document.body.classList.add('block'); 

    closeButton.onclick = () => {  
        popupMessage.classList.remove('opened');
        popupMessage.classList.add('closen'); 
        document.body.classList.remove('block');   
        
        errorPhone.innerHTML = '';
        errorPhone.classList.remove('wpcf7-not-valid-tip');
    }  
}, false );
