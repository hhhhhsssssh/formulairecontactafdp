import './bootstrap';

function sendMail(){
    console.log("aaaaaaaaaaaaa");
    let params = {
        
        name : document.getElementById("name").value,
        subject : document.getElementById("_subject").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value,
    };


    emailjs.send("service_b2gugqu","template_vk54zid",params).then (alert("Votre mail a été envoyé !"));
   
}

window.sendMail = sendMail;