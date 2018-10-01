<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de cadastro</title>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/organico.css">
        <link rel="stylesheet" type="text/css" href="../css/styleSystem.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="backgroundCadastro">
        <div class="painelCadastro">
            <div class="container">
                <div class="linha">
                    <div class="doze colunas">
                        <h2>Cadastre-se:</h2>
                    </div>
                    <div class="doze colunas">
                        <form name="signup" method="post" action="cadastrando.php">
                            <input type="text" name="nome" placeholder="Nome" class="u-width-100" pattern="[a-zA-Z0-9]+" required="">
                            <input type="text" name="usuario" placeholder="Usuário" class="u-width-100" pattern="[a-zA-Z0-9]+" required="">
                            <input type="email" name="email" placeholder="E-mail" class="u-width-100" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="">
                            <input type="password" name="senha" placeholder="Senha" class="u-width-100" pattern="[a-zA-Z0-9]+" required="">
                            <input type="submit" value="Enviar" class="botao destacado u-width-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    </body>
</html>