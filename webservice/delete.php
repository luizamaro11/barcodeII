<?php

    try{
        $conexao = mysqli_connect("localhost", "luizamaro11", "", "mobile2ds2");
        
        $id = $_GET['id'];
        
        $query = "delete from celular where codigoBarra = $id";
    }
    catch(Exception $e){
        echo "Erro ao conectar ".$e;
    }