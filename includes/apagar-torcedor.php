<?php
        include_once '../classes/conexao.class.php';
        include_once '../classes/DAO/torcedorDAO.class.php'; 
         
         $id          = $_GET['id'];
         $torcedorDAO = new TorcedorDAO();
         $resultado   = $torcedorDAO->apagar($id);
         
         if($resultado):
             header('Location: ../torcedores-cadastrados.php?excuido=sim');
         else:
             header('Location: ../torcedores-cadastrados?excluido=nao');
         endif;
?>

