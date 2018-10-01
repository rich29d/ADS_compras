<?php 
    include_once "../bancoDados/autenticandoBanco.php";

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = mysqli_query($conexao, "insert into usuarios (nome, usuario, email, senha)
    values ('$nome', '$usuario', '$email', '$senha')" or die (mysql_error());

    header("Location: ../login/login.php");
?>