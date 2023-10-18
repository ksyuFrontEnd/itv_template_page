const popupSuccess = document.getElementById("popup-success");
const popupMessage = document.querySelector(".popup")
const closeButton = document.querySelector('.popup__close');

document.addEventListener( 'wpcf7mailsent', function( event ) {
    popupMessage.classList.add('opened');
    document.body.classList.add('block'); 
    closeButton.onclick = () => {  
        popupMessage.classList.remove('opened');
        popupMessage.classList.add('closen'); 
        document.body.classList.remove('block');                
    }
}, false );
