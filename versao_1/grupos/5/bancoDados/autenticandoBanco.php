<?php 
    $host = "ads-db-instance.cmxzoufs5dty.us-west-2.rds.amazonaws.com";
    $user = "admin_compras";
    $pass = "admin_compras123@";
    $banco = "contasreceber";
    $conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
?> 