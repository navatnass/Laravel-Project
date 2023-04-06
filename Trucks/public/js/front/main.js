//Scroling to the section

let section = document.querySelectorAll('section');

window.onscroll = function () {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
    // console.log(section);

        if(top > offset && top < offset + height){
        };
    });
}

//Contact TEXTAREA

let textarea = document.querySelector('textarea');

textarea.addEventListener("keyup", e => {
    textarea.style.height = "60px";
    let textHeight = e.target.scrollHeight;
    // console.log(textHeight);
    textarea.style.height = `${textHeight}px`;
});

//SEND EMAIL

function sendMsg(){
    const messageEmail = document.querySelector('.textA');
    const email = document.querySelector('#emailz');  
    
Email.send({
    Host : "smtp.gmail.com",
    Username : "Gintas.ltu@gmail.com",
    // Passsword: '38B69D130CE8F510BA29CBE36AEC1EA7A87D',
    Password : "cnzyybzvasyapwaf",
    // To : "Gintas.ltu@gmail.com",
    // From : email.value,
    // Subject : "Contact Form",
    // Body : msg.value
    // SecureToken: "fb181305-ed84-43fa-aed1-b0409cd2a0e5",
    To : 'Gintas.ltu@gmail.com',
    From: 'Gintas.ltu@gmail.com',
    Subject : "Contact Form",
    Body : "TESTAS"
}).then((succes) => {
    alert("Message sent successfully");
}).catch((error) => {
    alert("Error sending message");
});
}

//Form 

const firstName = document.getElementById('firstName');
const email = document.getElementById('emailz');
const form = document.getElementById('form');
const error = document.getElementById('error');
const msg = document.getElementsByClassName('textA');

form.addEventListener('submit', e =>{
    e.preventDefault();
    validateInputs();
    setTimeout(validateInputs(), 3000, firstName.value = "", email.value = "", textarea.value = "");
});

const setErrorName = (element, msg) => {
    const textField = element.parentElement;
    const errorMsg = textField.querySelector('#error');

    errorMsg.innerText = msg;
    errorMsg.style.color = 'red';
    errorMsg.style.fontSize = '9px';
    errorMsg.style.position = 'relative';
    errorMsg.style.top = '2px';
    textField.classList.add('error');
    textField.classList.remove('success');
}

const setError = (element, msg) => {
    const textField = element.parentElement;
    const errorMsg = textField.querySelector('#error');

    errorMsg.innerText = msg;
    errorMsg.style.color = 'red';
    errorMsg.style.fontSize = '9px';
    errorMsg.style.position = 'relative';
    textField.classList.add('error');
    textField.classList.remove('success');
}

const validEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const setSuccess = (element) => {
    const textField = element.parentElement;
    const errorMsg = textField.querySelector('#error');

    errorMsg.innerText = '';
    textField.classList.add('success');
    textField.classList.remove('error');
}

validateInputs = () => {
    let firstnameValue = firstName.value.trim();
    let emailValue = email.value.trim();
    let msgValue = textarea.value.trim()

    if(firstnameValue === '' || firstnameValue == null) {
        setErrorName(firstName, 'Name is required');
    } else if(firstnameValue.length > 16) {
        setErrorName(firstName, 'Name must be less then 16 characters');
    } else if(firstnameValue.length < 4) {
        setErrorName(firstName, 'Name must be more then 4 characters');
    } else {
        setSuccess(firstName);
        // setTimeout(() => {
        //     firstnameValue = '';
        //     console.log(firstnameValue);
        //     console.log("Delayed for 1 second.");
        //   }, 5000)
    }

    if(emailValue === '' || emailValue == null) {
        setError(email, 'Email is required');
    } else if (!validEmail(emailValue)){
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
        // setTimeout(() => {
        //     emailValue = '';
        //     console.log(emailValue);
        //     console.log("Delayed for 12 second.");
        //   }, 2000)
    }

    if(msgValue === '' || msgValue == null){
        // setTimeout(() => {
        //     msgValue = '';
        //     console.log(msgValue);
        //     console.log("Delayed for 123 second.");
        //   }, 2000)
    }
}
