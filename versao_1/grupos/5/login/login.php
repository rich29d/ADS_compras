<?php
    session_start();
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/organico.css">
        <link rel="stylesheet" type="text/css" href="../css/styleSystem.css">
        <link rel="shortcut icon" type="image/png" href="../img/logoSystem.png"/>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <style>
            .backgroundLogin {
                background-image: url(../img/gradientBlue.svg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                position: relative;
                display: flex;
                align-items: center;
                width: 100%;
                height: 100vh;
            }
            
            .divisionUser {
                width: 28.5em;
            }
            
            form {
                margin: 0 auto;
            }
            
            .iconeUsuario {
                display: block;
                margin: 3rem auto;
            }
            
            .esqueceuSenha {
                color: #FFF;
                display: inline-block;
                text-decoration: none;
            }
            
            .lembrarEu {
                color: #FFF;
                display: inline-block;
                font-weight: 100;
            }
            
            .respostaForm {
                position: absolute;
                top: 0;
                left: 0;
                margin: 2rem;
            }
            
            .sucess {
                color: #008641;
                display: none;
            }
            
            .error {
                color: #c3000d;
                display: none;
            }
            
            input[type='button'].botao.destacado.new {
                background-color: #ff1919;
                border-color: #ff1919;
                color: #FFF;
            }
            
            input[type='button'].botao.destacado.new:hover,
            input[type='button'].botao.destacado.new:focus {
                background-color: #ff0000;
                border-color: #ff0000;
                color: #FFF;
            }
            
            @media screen and (min-width: 750px) {
                .esqueceuSenha {
                    float: right;
                    margin-top: 2rem;
                }
                .espacoUp {
                    margin-top: 1.5rem;
                }
            }
        </style>
    </head>

    <body>
        <form name="loginForm" action="autenticandoLogin.php" method="post">
            <div class="backgroundLogin">
                <div class="container divisionUser">
                    <div class="linha">
                        <div class="doze colunas">
                            <img src="../img/user.png" alt="ícone usuário" width="150" height="150" class="iconeUsuario">
                        </div>
                        <div class="doze colunas espacoUp">
                            <input type="text" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="E-mail" class="u-width-100" id="email">
                        </div>
                        <div class="doze colunas espacoUp">
                            <input type="password" name="senha" pattern="[a-zA-Z0-9]+" required="" placeholder="Senha" class="u-width-100" id="senha">
                        </div>
                        <div class="seis colunas espacoUp">
                            <input type="checkbox" value="lembrar" id="lembrar" checked> <label for="lembrar" class="lembrarEu">Lembrar de mim</label>
                        </div>
                        <div class="seis colunas">
                            <a href="../recuperandoSenha/esqueceuSenha.php" target="_blank" class="esqueceuSenha">Esqueceu a senha ?</a>
                        </div>
                        <div class="seis colunas espacoUp" style="margin-top: 1.5rem;">
                            <input type="submit" value="Enviar" style="display: block;margin: auto;width: 100%;" class="u-width-100 botao destacado">
                        </div>
                        <div class="seis colunas espacoUp" style="margin-top: 1.5rem;">
                            <a href="../cadastro/sistemaCadastro.php" style="text-decoration: none;">
                                <input type="button" value="Cadastre-se" style="display: block;margin: auto;width: 100%;" class="u-width-100 botao destacado new">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>