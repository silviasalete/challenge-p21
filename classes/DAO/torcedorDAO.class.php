<?php

class TorcedorDAO { // Mudar para TorcedorDAO
    
    private $conexao;
    
    public function __construct() {
        $this->conexao = new Conexao();
    }
    
    public function inserir ($torcedor){ 

        $sql = "INSERT INTO torcedores (NOME, DOCUMENTO, CEP, ENDERECO, BAIRRO, CIDADE, UF, TELEFONE, EMAIL, ATIVO, ORIGEM, DATA_CADASTRO) VALUES ('".$torcedor->getNome()."','". $torcedor->getDocumento()."','".$torcedor->getCep()."','".$torcedor->getEndereco()."','".$torcedor->getBairro()."','".$torcedor->getCidade()."','".$torcedor->getUf()."','". 
 $torcedor->getTelefone()."','".$torcedor->getEmail()."','".$torcedor->getAtivo()."','".$torcedor->getOrigem()."','".$torcedor->getData()."')"; 
        
        if(mysqli_query($this->conexao->getConexao(), $sql)):
            return true;
        else:
            return false;
        endif;
    }

    public function inserirTodos ($arrayTorcedores){ 

        $retorno = null;

        for ($i=0; $i < count($arrayTorcedores); $i++) { 

            $sql = "INSERT INTO torcedores (NOME, DOCUMENTO, CEP, ENDERECO, BAIRRO, CIDADE, UF, TELEFONE, EMAIL, ATIVO,ORIGEM, DATA_CADASTRO) VALUES ('".$arrayTorcedores[$i]['nome'] ."','".$arrayTorcedores[$i]['documento']."','".$arrayTorcedores[$i]['cep']."','".$arrayTorcedores[$i]['endereco']."','".$arrayTorcedores[$i]['bairro']."','".$arrayTorcedores[$i]['cidade']."','".$arrayTorcedores[$i]['uf']."','". 
            $arrayTorcedores[$i]['telefone']."','".$arrayTorcedores[$i]['email']."','".$arrayTorcedores[$i]['ativo']."','".$arrayTorcedores[$i]['origem']."','".$arrayTorcedores[$i]['data']."')"; 
                   
            $retorno = mysqli_query($this->conexao->getConexao(), $sql);
        }
        if($retorno):
            return true;
        else:
            return false;
        endif;
    }

    public function consultarTorcedores (){ //Mudar para consultarTodos

        $sql = "SELECT * FROM torcedores ORDER BY NOME ASC";
            
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
            
        if(mysqli_num_rows($resultado)):
                
            $arr = array();

            while($row = mysqli_fetch_assoc($resultado)){
                $arr[] = $row;
            }

            return $arr;

        else:

            return false;

        endif;
    }
    public function consultarUltimos ($quantidade){ //Mudar para consultarTodos

        $sql = "SELECT * FROM torcedores ORDER BY DATA_CADASTRO DESC, ID DESC LIMIT ".$quantidade;
            
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
            
        if(mysqli_num_rows($resultado)):
                
            $arr = array();

            while($row = mysqli_fetch_assoc($resultado)){
                $arr[] = $row;
            }

            return $arr;

        else:

            return false;

        endif;
    }


    public function apagar($id_torcedor){
        
        $sql = "DELETE FROM torcedores WHERE ID=".$id_torcedor;
        
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
        
        if($resultado):

            return true;

        else:

            return false;

        endif;
    }
    
    public function alterar($torcedor){
        
        $sql = "UPDATE torcedores SET NOME='".$torcedor->getNome()."', DOCUMENTO = '". $torcedor->getDocumento()."', CEP='".$torcedor->getCep()."', ENDERECO='".$torcedor->getEndereco()."', BAIRRO='".$torcedor->getBairro()."', CIDADE='".$torcedor->getCidade()."', UF='". 
 $torcedor->getUF()."', TELEFONE='".$torcedor->getTelefone()."', EMAIL='".$torcedor->getEmail()."', ATIVO='".$torcedor->getAtivo()."' WHERE  ID=".$torcedor->getId(); 
        
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
        
        if($resultado):

            return true;

        else:

            return $sql;

        endif;
    }
    
    public function consultarTorcedorPorId ($id){
        
        $sql =  "SELECT * FROM torcedores WHERE id=".$id;
        
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
        
        if(mysqli_num_rows($resultado)):

             $arr = array();

                while($row = mysqli_fetch_assoc($resultado)){

                    $arr[] = $row;
                    
                }

                return $arr;
        else:

            return false;

        endif;
    } 
    
    public function consultarNome ($nome){
        
        $sql =  "SELECT * FROM torcedores WHERE nome like '".$nome."'";
        
        $resultado = mysqli_query($this->conexao->getConexao(), $sql);
        
        if(mysqli_num_rows($resultado)):

             $arr = array();
             

                while($row = mysqli_fetch_assoc($resultado)){

                    $arr[] = $row;
                    
                }
                $data = "<table>
                <tr><th>Todos dos Torcedores CADASTRADOS</th></tr>
                <tr>
                    <th>NOME</th>
                    <th>DOCUMENTO</th>
                    <th>CEP</th>
                    <th>ENDEREÇO</th>
                    <th>BAIRRO</th>
                    <th>CIDADE</th>
                    <th>UF</th>
                    <th>TELEFONE</th>
                    <th>E-MAIL</th>
                    <th>ATIVO</th>
                </tr>
                ";
                for ($i=0; $i < count($arr); $i++) { 
                    $data .= "<tr>
                        <td>".$arr[$i]['NOME']."</td>".
                        "<td>".$arr[$i]['DOCUMENTO']."</td>".
                        "<td>".$arr[$i]['CEP']."</td>".
                        "<td>".$arr[$i]['ENDERECO']."</td>".
                        "<td>".$arr[$i]['BAIRRO']."</td>".
                        "<td>".$arr[$i]['CIDADE']."</td>".
                        "<td>".$arr[$i]['UF']."</td>".
                        "<td>".$arr[$i]['TELEFONE']."</td>".
                        "<td>".$arr[$i]['EMAIL']."</td>".
                        "<td>".$arr[$i]['ATIVO']."</td></tr>";
                }
                $data .= "</table>";
            echo $data;
        else:

            return $sql;

        endif;
    }
}
