function entrar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var confsenha = document.getElementById('confsenha').value;

    if(document.forms[0].email.value.indexOf('@')== -1
    || document.forms[0].email.value.indexOf('.') == -1){
        alert("Por favor, informe um email válido");
    }

    if(senha.lenght < 8){
        alert("Informe uma senha válida")
    }

    if(confsenha != senha){
        alert("As senhas não correspondem")
    }
} 