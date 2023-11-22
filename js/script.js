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
        document.querySelector('.login-container').style.zIndex = '-2';
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

