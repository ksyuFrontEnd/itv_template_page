const popupSuccess = document.getElementById("popup-success");
const popupMessage = document.querySelector(".popup")
const closeButton = document.querySelector('.popup__close');
const errorPhone = document.querySelector('.error-phone');

document.addEventListener( 'wpcf7submit', function( event ) {
    let inputs = event.detail.inputs;
    let maskPhone = inputs.filter(function (elem) {
        return 'mask-phone' == elem.name;
    })
    
    if (!Number(maskPhone.value)) {
        errorPhone.innerHTML = "Будь ласка, заповніть це поле.";
        errorPhone.classList.add('wpcf7-not-valid-tip'); 
    }   
}, false );


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
