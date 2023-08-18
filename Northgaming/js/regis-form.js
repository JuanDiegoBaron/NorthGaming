const userName = document.getElementById("userName")
const birth = document.getElementById("birth")
const mail = document.getElementById("mail")
const pass = document.getElementById("pass")
const form = document.getElementById("regis-form")
const warn = document.getElementById("warning")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = true
    let regexEmail = /^(([^<>()\[\]\.,;:\s@\”]+(\.[^<>()\[\]\.,;:\s@\”]+)*)|(\”.+\”))@(([^<>()[\]\.,;:\s@\”]+\.)+[^<>()[\]\.,;:\s@\”]{2,})$/
    warn.innerHTML = ""
    if(userName.value.length <6){
        warnings += "Usuario corto <br>"
        entrar = false
    }
    if(!regexEmail.test(mail.value)){
        warnings += "Mail invalido <br>"
        entrar = false
    }
    if(pass.value.length < 8){
        warnings += "Contraseña corta"
        entrar = false
    }

    if(!entrar){
        // Validacion fallida
        warn.innerHTML = warnings
    }
    else{
        // validacion exitosa
        window.location.href = 'index.php?p=home';
    }

})