function abrirModal(){
    document.getElementById('login').style.display = 'flex';
    setTimeout(function() {
        document.getElementById('login').style.height = '100%';
        document.querySelector('.login-container').style.zIndex = 2;
        document.querySelector('.login-container').style.backgroundColor = 'rgba(0, 0, 0, 0.82)';        
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }, 250);
    document.body.style.overflow = 'hidden';
}
closeModalBtn.addEventListener('click', function() {
    document.getElementById('login').style.height = '0%';
    setTimeout(function() {
        document.getElementById('login').style.display = 'none';
        document.body.style.overflow = 'auto';
        document.querySelector('.login-container').style.backgroundColor = 'transparent';
        document.querySelector('.login-container').style.zIndex = '0';
    }, 800);
});


function verSenha(){
    let visibleOrNot = document.getElementById('verSenha');
    let inputSenha = document.getElementById('password');

    if(visibleOrNot.innerHTML.trim().toLowerCase() === "visibility_off"){
        visibleOrNot.innerHTML = "visibility";
        inputSenha.type = 'text';
        console.log("a");
    }
    else if(visibleOrNot.innerHTML.trim().toLowerCase() === "visibility"){
        visibleOrNot.innerHTML = "visibility_off";
        inputSenha.type = 'password';
        console.log("c");
    }
    console.log("b");
}

let DarkMode = document.querySelector('.theme-checkbox');
let text = document.querySelectorAll("p, h2, .material-symbols-outlined, label");
let header = document.querySelector('.header');
let loginContainer = document.getElementById('login');
let inputText = document.querySelectorAll("#password, #email");
let botaoLogin = document.querySelector(".fazerLogin");
let pecasContainer = document.querySelectorAll(".pecas-container");
let navBar = document.querySelector(".nav-bar");

DarkMode.addEventListener('change', function() {
    if (DarkMode.checked) {
            header.style.backgroundColor = "#010409";
            navBar.style.borderBottom = "3px solid #22252c";
            navBar.style.borderTop = "3px solid #22252c";
            loginContainer.style.backgroundColor = "#000000";
            document.body.style.backgroundColor = "#161b22";
            
            
            for (let i = 0; i < text.length; i++) {
                text[i].style.color = "#E6EDF3";
            }
            for(let i = 0; i<inputText.length; i++){
                inputText[i].style.color = "#E6EDF3";
            }
        } else{
            header.style.backgroundColor = "#27282C";
            loginContainer.style.backgroundColor = "#FFFFFF";
            document.body.style.backgroundColor = "#FFFFFF"
            navBar.style.border = "none";
            
            for (let i = 0; i < text.length; i++) {
                text[i].style.color = "#000000";
            }
            for(let i = 0; i<inputText.length; i++){
                inputText[i].style.backgroundColor = "#FFFFFF";
                inputText[i].style.color = "#000000";
            }
        }
    });