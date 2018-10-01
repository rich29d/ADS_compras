<?php
    $dados = mysqli_query($conexao, "select * from clientes");

    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);


if( $_SERVER['REQUEST_METHOD']=='POST' ) {
        $parametro1 = filter_input(INPUT_POST, "parametro1");
        $parametro2 = filter_input(INPUT_POST, "parametro2");
        $parametro3 = filter_input(INPUT_POST, "parametro3");
        $parametro4 = filter_input(INPUT_POST, "parametro4");
        $parametro5 = filter_input(INPUT_POST, "parametro5");
        $parametro6 = filter_input(INPUT_POST, "parametro6");
        $parametro7 = filter_input(INPUT_POST, "parametro7");
        $parametro8 = filter_input(INPUT_POST, "parametro8");

        if($parametro4){
            $dados = mysqli_query($conexao, "select * from clientes where tipoPag like '$parametro4%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }
        
        if($parametro3 == "aberto" || $parametro3 == "pago" || $parametro3 == "atraso"){
            $dados = mysqli_query($conexao, "select * from clientes where status like '$parametro3%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }else if($parametro3 == "todos"){
            $dados = mysqli_query($conexao, "select * from clientes");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }

        if($parametro1){
            $dados = mysqli_query($conexao, "select * from clientes where nfe like '$parametro1%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }

        if($parametro2){
            $dados = mysqli_query($conexao, "select * from clientes where nome like '$parametro2%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        } 

        if($parametro5){
            $dados = mysqli_query($conexao, "select * from clientes where valorParcela like '$parametro5%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }

        if($parametro6){
            $dados = mysqli_query($conexao, "select * from clientes where valorTotal like '$parametro6%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }

        if($parametro7){
            $dados = mysqli_query($conexao, "select * from clientes where dataVenda like '$parametro7%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }

        if($parametro8){
            $dados = mysqli_query($conexao, "select * from clientes where vencimento like '$parametro8%'");

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        }    
    }
?>