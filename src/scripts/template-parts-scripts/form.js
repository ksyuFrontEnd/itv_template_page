const popupSuccess = document.getElementById("popup-success");
const popupMessage = document.querySelector(".popup")
const closeButton = document.querySelector('.popup__close');
const errorPhone = document.querySelector('.error-phone');

document.addEventListener( 'wpcf7submit', function( event ) {
    let inputs = event.detail.inputs;
    for ( let i = 0; i < inputs.length; i++ ) {        
        if ( 'mask-phone' == inputs[i].name) {   
            console.log(Number(inputs[i].value.length));     

            if ( inputs[i].value.length < 19 ) {                
                errorPhone.innerHTML = "Будь ласка, заповніть це поле.";
                errorPhone.classList.add('wpcf7-not-valid-tip');                
                break; 
            }   
            if ( (!Number(inputs[i].value)) ) {                
                errorPhone.innerHTML = "Будь ласка, заповніть це поле.";
                errorPhone.classList.add('wpcf7-not-valid-tip');                
                break; 
            }    
        }    
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
