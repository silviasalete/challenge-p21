<?php

    include_once 'includes/XLSXReader.php';
    include_once 'classes/conexao.class.php';
    include_once 'classes/DAO/torcedorDAO.class.php'; 
    
    $mensagem = '';

    function verPlanilha($arquivo){
        
        $extencao_permitida = 'xlsx';
        $extencao_arquivo = pathinfo($_FILES["excelFile"]["name"], PATHINFO_EXTENSION);

        if ($extencao_permitida == $extencao_arquivo) {
            $uploaddir  = 'planilhas/';
            $uploadfile = $uploaddir .'torcedores.xlsx';

            if (move_uploaded_file($_FILES['excelFile']['tmp_name'], $uploadfile)) {
                
                $excel            = new XLSXReader($uploadfile);
                $abas_planilha    = $excel->getSheetNames($excel); 
                $dados_torcedores = $excel->getSheetData($abas_planilha[1]); 
                $cabecalho        = array('NOME','DOCUMENTO','CEP','ENDEREÇO','BAIRRO','CIDADE','UF','TELEFONE','E-MAIL','ATIVO');

                if(!in_array($cabecalho, $dados_torcedores)){
                    echo '<div class="alert alert-warning" role="alert">
                    Ops! Esta planilha me parece estar incorreta. Para importar os torcedores a planilha deve conter os seguintes cabeçalhos 
                    <span class="alert-link">NOME, DOCUMENTO, CEP, ENDEREÇO, BAIRRO, CIDADE, UF, TELEFONE, E-MAIL e ATIVO</span></div>';
                };

                echo "<table class='table table-responsive table-borderless'>";
                foreach ($dados_torcedores[0] as $titulo){
                    echo '<th>'.$titulo.'</th>';
                }   

                foreach ($dados_torcedores as $linhas => $linha){
                    if ($linhas != 0) {
                        echo '<tr>';
                        foreach ($linha as $valor){
                            echo '<td>'.$valor.'</td>';
                        }
                        echo '</tr>';
                    }
                }  
                echo "</table>";

            } else {
                echo "Não foi possível buscar a planilha!\n";
            }
        }else{
            echo '<div class="alert alert-warning" role="alert"> Arquivo não permitido, importe um arquivo excel com a extensão .xlsx
            </div>'; 
        }
    }

    if(isset($_POST['inserir-todos'])): 

        $excel           = new XLSXReader('planilhas/torcedores.xlsx');
        $abas_planilha   = $excel->getSheetNames($excel); 
        $arrayExcel      = $excel->getSheetData($abas_planilha[1]); 

            for ($i=0; $i < (count($arrayExcel)-1); $i++) { 
                $arrayTorcedores[$i]['nome']      = $arrayExcel[$i+1][0]; 
                $arrayTorcedores[$i]['documento'] = $arrayExcel[$i+1][1];  
                $arrayTorcedores[$i]['cep']       = $arrayExcel[$i+1][2]; 
                $arrayTorcedores[$i]['endereco']  = $arrayExcel[$i+1][3];  
                $arrayTorcedores[$i]['bairro']    = $arrayExcel[$i+1][4];   
                $arrayTorcedores[$i]['cidade']    = $arrayExcel[$i+1][5];  
                $arrayTorcedores[$i]['uf']        = $arrayExcel[$i+1][6];   
                $arrayTorcedores[$i]['telefone']  = $arrayExcel[$i+1][7]; 
                $arrayTorcedores[$i]['email']     = $arrayExcel[$i+1][8];
                $arrayTorcedores[$i]['ativo']     = $arrayExcel[$i+1][9];
                $arrayTorcedores[$i]['origem']    = "excel";
                $arrayTorcedores[$i]['data']      = date('Y-m-d'); 
             }

        $torcedorDAO = new TorcedorDAO();
        
        $resultado = $torcedorDAO->inserirTodos($arrayTorcedores);

        if ($resultado) {
            $mensagem = '<div class="alert alert-success" role="alert">Torcedores cadastrados com sucesso!</div>';
        }else{
            $mensagem = '<div class="alert alert-danger" role="alert">Não foi possível cadasttrar os torcedores</div>';
        }

     endif; 
?>