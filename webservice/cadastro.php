<?php
    try{
        $conexao = mysqli_connect("localhost", "luizamaro11", "", "barcode");
        
        $codigoBarra = $_POST('codigoBarra');
        $nomeCelular = $_POST('nome');
        $valorCelular = $_POST('valor');
        $descricao = $_POST('descricao');
        $processador = $_POST('processador');
        $sistemaOp = $_POST('sistema');
        $tamTela = $_POST('tamTela');
        $wifi = $_POST('wifi');
        $qtdCamera = $_POST('qtdCamera');
        $resolucaoCamera = $_POST('resolucao');
        $memoriaFlash = $_POST('memoriaFlash');
        
        $query = "insert into celular values('$codigoBarra', '$nomeCelular', '$valorCelular', '$descricao', '$processador', '$sistemaOp', '$tamTela', '$wifi', '$qtdCamera', '$resolucaoCamera', '$memoriaFlash')";
        
        mysqli_connect($conexao, $query);
        
        echo "cadastro realizado com sucesso";
        
    }
    catch(Exception $e){
        echo "Erro ao conectar ".$e;
    }
    
    