<?php
    include_once("../bancoDados/autenticandoBanco.php");

        
    if(isset($_POST['ok'])){
        
        $retorno = "";
        $result = true;
        $email = $_POST['email'];
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
            $erro[] = "E-mail inválido.";   
            $result = false;
        }
        
        /*
        $sql_code = "select senha from usuarios where email = '$email'";
        $sql_query = $mysqli->query($conexao, $sql_code) or die ($mysqli->error);
        */
        $sql_query = mysqli_query($conexao, "select senha from usuarios where email = '$email'") or die (mysql_error());
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;
        
        
        if($result)
            $erro[] = "O e-mail informado não existe no sistema.";   
            
        if($result){
            
            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = md5(md5($novasenha));

            if(1==1/*mail($email, "Sua nova Senha", "Sua nova senha: ".$novasenha)*/){
                $sql_query = mysqli_query($conexao, "UPDATE usuarios set senha = '$nscriptografada' where email = '$email'") or die (mysql_error());
            
                if($sql_query){
                    $retorno = "Senha Alterada com Sucesso!";
                }
            }
            
        }
    }     
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esqueceu sua Senha ?</title>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/organico.css">
</head>
<body>
    <div class="container">
        <div class="linha">
            <div class="doze colunas">
                <form method="POST" action="">
                    <input type="text" name="email" placeholder="Digite o e-mail">
                    <input name="ok" type="submit" value="Enviar">
                </form>
                <?php/* echo $retorno*/?>
            </div>
        </div>
    </div>    
</body>
</html>