<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Autenticando Login</title>
    <script>
        function sucessoQuery() {
            setTimeout("window.location='../index.php'", 0);
        }
        function failQuery() {
            setTimeout("window.location='login.php'", 5000);
        }
    </script>
</head>

<body>
    <?php
    session_start();    
    include_once("../bancoDados/autenticandoBanco.php");

    //if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = $_POST['email'];
        $senha = $_POST['senha']; 
        $senha = md5($senha);
    
        $_SESSION['email'] = $email;
        
        $sql = mysqli_query($conexao, "select * from usuarios where email = '$email' and '$senha'") or die (mysql_error());
        $row = mysqli_num_rows($sql);
        //$resultado = mysqli_fetch_assoc($result);

        if($row > 0){
            if(!isset($_SESSION)){
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['senha'] = $_POST['senha'];
            }
            echo "<script>sucessoQuery()</script>";
        }else{
            echo "Nome de usuário ou senha inválidos!";
            echo "<script>failQuery()</script>";    
        }

        /*
        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usúario ou senha inválido";
            header("Location: login.php");    
        }else if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];
            header("Location: administrativa.php");    
        }else{
            $_SESSION['loginErro'] = "Usúario ou senha inválido";
            header("Location: login.php");      
        }
        
        //header("Location: administrativa.php");
    }else{
        $_SESSION['loginErro'] = "Usúario ou senha inválido";
        header("Location: login.php");
    }
    */
?>
</body>

</html>