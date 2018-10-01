
var
    login = "",
    senha = "";

function logar(){
    console.log(validar())
    if(validar()){
        $.post('public/_js/logar.json',{login:login, senha:senha})
            .done(function(res){
                console.log(res)
                if(login==res.login && senha==res.senha) window.location.href = 'telafuncionario';
                else msg_login();
            });

    }else msg_login()
}

function validar(){
    login = $('.campo_nome').val();
    senha = $('.campo_senha').val();
    return login!="" || senha!="";
}

function msg_login(){
    $('.msg-login').addClass('open');
    $('.msg-login-txt').fadeOut().fadeIn();
}