<?php

     $clientesXML     = "includes/clientes.xml";  
     $xml             = simplexml_load_file($clientesXML) -> torcedor;  
     $arrayTorcedores = array();
     
    for ($i=0; $i < count($xml); $i++) {  
         $arrayTorcedores[$i]['nome']      = utf8_decode($xml[$i] -> attributes()->nome); 
         $arrayTorcedores[$i]['documento'] = utf8_decode($xml[$i] -> attributes()->documento); 
         $arrayTorcedores[$i]['cep']       = utf8_decode($xml[$i] -> attributes()->cep); 
         $arrayTorcedores[$i]['endereco']  = utf8_decode($xml[$i] -> attributes()->endereco); 
         $arrayTorcedores[$i]['bairro']    = utf8_decode($xml[$i] -> attributes()->bairro);  
         $arrayTorcedores[$i]['cidade']    = utf8_decode($xml[$i] -> attributes()->cidade); 
         $arrayTorcedores[$i]['uf']        = utf8_decode($xml[$i] -> attributes()->uf); 
         $arrayTorcedores[$i]['telefone']  = utf8_decode($xml[$i] -> attributes()->telefone); 
         $arrayTorcedores[$i]['email']     = utf8_decode($xml[$i] -> attributes()->email); 
         $arrayTorcedores[$i]['ativo']     = utf8_decode($xml[$i] -> attributes()->ativo); 
         $arrayTorcedores[$i]['origem']    = "xml";
         $arrayTorcedores[$i]['data']      = date('Y-m-d');
    } 
?>