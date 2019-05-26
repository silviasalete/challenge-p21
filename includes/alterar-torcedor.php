<?php

    include_once 'classes/conexao.class.php';
    include_once 'classes/DAO/torcedorDAO.class.php'; 
    include_once 'classes/entidades/torcedor.class.php'; 
     
    $torcedorDAO = new TorcedorDAO();
    $torcedor    = new Torcedor();
    $mensagem    = '';

    if(isset($_POST['alterar-torcedor'])): 

        $id         = $_POST['id'];
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
            
        $torcedor->setId($id);
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
                
        $resultado = $torcedorDAO->alterar($torcedor);

        if ($resultado) {
            $mensagem = '<div class="alert alert-success" role="alert">Torcedor alterado com sucesso!</div>';
        }else{
            $mensagem = '<div class="alert alert-danger" role="alert">Não foi possível alterar o torcedor</div>';
        }
        

    endif;
?>