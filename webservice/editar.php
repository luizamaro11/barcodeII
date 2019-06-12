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
        
        $query = "update celular set 
        nm_celular = '$nome',
        valorCelular = '$vl_celular',
        descricao = 'ds_descricao',
        processador = 'ds_processador',
        sistema operacional = 'ds_sistema',
        tela = 'ds_tamanhoTela',
        wifi = 'ds_wifi',
        quantidade de camera = 'qtd_camera',
        resolução de camera = 'qtd_resolucaoCamera',
        memoria flash = 'ds_memoriaFlash',
        where codigoBarra = $codigoBarra";
        
        mysqli_connect($conexao, $query);
        
        echo "alteração realizada com sucesso";
    }
    catch(Exception $e){
        echo "erro ao cadastrar" . $e;    
    }