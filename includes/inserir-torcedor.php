<?php

    include_once 'classes/conexao.class.php';
    include_once 'classes/DAO/torcedorDAO.class.php'; 
    include_once 'classes/entidades/torcedor.class.php'; 
        
    $torcedor                   = new Torcedor();
    $torcedorDAO                = new TorcedorDAO();
    $mensagem = '';

    if(isset($_POST['inserir-torcedor'])):

        $nome       = $_POST['nome'];
        $documento  = $_POST['documento'];
        $cep        = $_POST['cep'];
        $endereco   = $_POST['endereco'];
        $bairro     = $_POST['bairro'];
        $cidade     = $_POST['cidade'];
        $uf         = $_POST['uf'];
        $telefone   = $_POST['telefone'];
        $email      = $_POST['email'];
        $ativo      = $_POST['ativo'];        
        $origem     = $_POST['origem'];     
        $data       = date('Y-m-d'); 

        $torcedor->setNome($nome);
        $torcedor->setDocumento($documento);
        $torcedor->setCep($cep);
        $torcedor->setEndereco($endereco);
        $torcedor->setBairro($bairro);
        $torcedor->setCidade($cidade);
        $torcedor->setUf($uf);
        $torcedor->setTelefone($telefone);
        $torcedor->setEmail($email);
        $torcedor->setAtivo($ativo);
        $torcedor->setOrigem($origem);
        $torcedor->setData($data);
    
        $resultado = $torcedorDAO->inserir($torcedor);

        if ($resultado) {
            $mensagem = '<div class="alert alert-success" role="alert">Torcedor cadastrado com sucesso! Confira os dados clicando <a href="torcedores-cadastrados.php">aqui</a>.</div>';
        }else{
            $mensagem = '<div class="alert alert-danger" role="alert">Não foi possível cadasttrar o torcedor</div>';
        }
        
    endif;

    if(isset($_POST['inserir-todos'])):

        $resultado = $torcedorDAO->inserirTodos($arrayTorcedores);

        if ($resultado) {
            $mensagem = '<div class="alert alert-success" role="alert">Torcedores cadastrados com sucesso!</div>';
        }else{
            $mensagem = '<div class="alert alert-danger" role="alert">Não foi possível cadasttrar os torcedores</div>';
        }
    endif;
     
?>