<?php
    try{
        $conexao = mysqli_connect("localhost", "luizamaro11", "", "barcode");
        
        $query = "select * from celular order by codigoBarra asc";
        
        $resultado = mysqli_query($conexao, $query);
        
        $registro = array(
            'celular' => array()     
        );
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['celular'][$i] = array(
                'nome' => $linha['nm_pessoa'],
                'codigo' => $linha['cd_pessoa'],
                'valor' => $linha['vl_celular'],
                'descricao' => $linha['ds_descricao'],
                'processador' => $linha['ds_processador'],
                'sistema operacional' => $linha['ds_sistema'],
                'tela' => $linha['ds_tamanhoTela'],
                'wifi' => $linha['ds_wifi'],
                'quantidade de camera' => $linha['qtd_camera'],
                'resolução de camera' => $linha['qtd_resolucaoCamera'],
                'memoria flash' => $linha['ds_memoriaFlash'],
                
            );
            $i++;
        }
        
        echo json_encode($registro);
    }
    catch(Exception $e){
        echo "Erro ao conectar ".$e;
    }
