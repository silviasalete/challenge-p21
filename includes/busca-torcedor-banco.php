<?php
    include_once '../classes/conexao.class.php'; 

    $conexao = new Conexao();

    if (isset($_POST["nome"])) {
        $busca = $_POST['nome'];
        $query = "SELECT * FROM torcedores WHERE nome like '%".$busca."%'";
    } else {
        $query = "SELECT * FROM torcedores";
    }

    $resultado = mysqli_query($conexao->getConexao(), $query);

    if(mysqli_num_rows($resultado) > 0){

        $data = "<thead>
        <tr>
            <th scope='col'>AÇÕES</th> 
            <th scope='col'>NOME</th>
            <th scope='col'>DOCUMENTO</th>
            <th scope='col'>CEP</th>
            <th scope='col'>ENDEREÇO</th>
            <th scope='col'>BAIRRO</th>
            <th scope='col'>CIDADE</th>
            <th scope='col'>UF</th>
            <th scope='col'>TELEFONE</th>
            <th scope='col'>E-MAIL</th>
            <th scope='col'>ATIVO</th>
            <th scope='col'>ORIGEM</th>
            <th scope='col'>DATA</th>
        </tr><thead>";

        while($row = mysqli_fetch_assoc($resultado)){
            $arrayTorcedores[] = $row;
        }

        for ($i=0; $i < count($arrayTorcedores); $i++) { 
            $data .= "<tbody><tr>
                <td>
                    <a href='alterar-torcedor.php?id=".$arrayTorcedores[$i]['ID']."'><i class='fas fa-edit'></i></a>
                    <a href='includes/apagar-torcedor.php?id=".$arrayTorcedores[$i]['ID']."' class='apagar'><i class='fas fa-trash-alt'></i></a>
                </td>
                 <td>".$arrayTorcedores[$i]['NOME']."</td>".
                "<td>".$arrayTorcedores[$i]['DOCUMENTO']."</td>".
                "<td>".$arrayTorcedores[$i]['CEP']."</td>".
                "<td>".$arrayTorcedores[$i]['ENDERECO']."</td>".
                "<td>".$arrayTorcedores[$i]['BAIRRO']."</td>".
                "<td>".$arrayTorcedores[$i]['CIDADE']."</td>".
                "<td>".$arrayTorcedores[$i]['UF']."</td>".
                "<td>".$arrayTorcedores[$i]['TELEFONE']."</td>".
                "<td>".$arrayTorcedores[$i]['EMAIL']."</td>".
                "<td>".$arrayTorcedores[$i]['ATIVO']."</td>".
                "<td>".$arrayTorcedores[$i]['ORIGEM']."</td>".
                "<td>".$arrayTorcedores[$i]['DATA_CADASTRO']."</td>".
                "</tr><tbody>";
        }
    }else{
        $data = '<div class="alert alert-info" role="alert">
                    Nenhum torcedor cadastrado na base de dados. Deseja importar torcedores via 
                    <a href="importar-xml.php">XML</a> ou <a href="importar-excel.php">EXCEL</a>? <br>
                    Mas se quiser também pode cadastrar manualmente clicando <a href="formulario-torcedor.php">aqui</a>.
                </div>';
    }

    echo $data;
?>