<?php

class Conexao {
    
    private $host    = "localhost";
    private $usuario = "root";
    private $senha   = "";
    private $banco   = "desafio";
    private $conexao;
    
    public function __construct() {
        
        @$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco) 
                or die("<div class='alert alert-danger' role='alert'>Crie o banco de dados importando o arquivo 'banco.sql' <br> <<- <a href='index.php'>Voltar | </a> <a href='banco.sql'>Baixar arquivo</a></div>").  mysqli_error($this->conexao);
        
        mysqli_set_charset($this->conexao, "utf8");

        mysqli_select_db($this->conexao, $this->banco)or die("Falha ao selecionar o banco de dados");
    }
    
    function getConexao() {
        return $this->conexao;
    }


}
