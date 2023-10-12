const form = document.forms["form-message"];
const { name, phone, message } = form;
const buttonSubmit = document.getElementById("submit-btn");
const errorName = document.querySelector(".error-name");
const errorPhone = document.querySelector(".error-phone");
const error = document.querySelector(".error");
const errorMessage = document.querySelector(".error-message");
const popupMessage = document.querySelector(".popup")
const closeButton = document.querySelector('.popup__close');

//////Validations
// function validateName(name) {
//     let res = /^[a-zA-Zа-яА-ЯёЁіІїЇєЄ]+$/;
//     return res.test(name);
// }

// function validatePhone(phone) {
//     //let res = /\b\d{12}\b/;
//     let res = /\b\d\b/;
//     return res.test(phone);
// }

// ////////Form
// form.addEventListener("submit", (event) => {
//     event.preventDefault();

//     /////////Validations
//     if (!validateName(name.value)) {
//         console.log('error');
//         name.classList.add("error");  
//         errorName.innerHTML = "Ім'я має містити лише літери, без пробілів або спеціальних символів";
//         errorName.classList.add("error-message");             
//     }

//     if (!validatePhone(phone.value) && phone.value.trim().length !== 13) {
//         console.log('error');
//         phone.classList.add("error");  
//         errorPhone.innerHTML = "Невірний номер телефону. Телефонний номер має складатись з 10 цифр";
//         errorPhone.classList.add("error-message"); 
//     }

//     const isValidForm = Array.from(form.elements).every(
//         (element) => !element.classList.contains("error")
//     );

//     if (isValidForm) {
//         const formData = new FormData(form); 
//         const info = {
//             name: formData.get("name"),
//             phone: formData.get("phone"),
//             message: formData.get("message"),
//         }    
//         console.log(info);
//         popupMessage.classList.add('opened');      
//     }  

//     name.onfocus = () => {
//         const isErrorField = name.classList.contains("error");
//         if (isErrorField) {
//             name.classList.remove("error");
//             errorName.innerHTML = "";
//             errorName.classList.remove("error-message"); 
//         } 
//     }
    
//     phone.onfocus = () => {
//         const isErrorField = phone.classList.contains("error");
//         if (isErrorField) {
//             phone.classList.remove("error");
//             errorPhone.innerHTML = "";
//             errorPhone.classList.remove("error-message"); 
//         } 
//     } 
    
//     closeButton.onclick = () => {                  
//         popupMessage.classList.remove('opened');
//         popupMessage.classList.add('closen');            
//     }

//     form.reset();  
// });

form.addEventListener("submit", (event) => {    
    popupMessage.classList.add('opened');
    closeButton.onclick = () => {                  
        popupMessage.classList.remove('opened');
        popupMessage.classList.add('closen');            
    }
});
