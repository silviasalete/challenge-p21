<?php 
    class Torcedor {
       
        private $id;
        private $nome;
        private $documento;
        private $cep;
        private $endereco;
        private $bairro;
        private $cidade; 
        private $uf;
        private $telefone;
        private $email;
        private $ativo; 
        private $origem; 
        private $data; 
        
        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getDocumento() {
            return $this->documento;
        }

        function getCep() {
            return $this->cep;
        }

        function getEndereco() {
            return $this->endereco;
        }

        function getBairro() {
            return $this->bairro;
        }

        function getCidade() {
            return $this->cidade;
        } 

        function getUf() {
            return $this->uf;
        }
        function getTelefone() {
            return $this->telefone;
        }

        function getEmail() {
            return $this->email;
        }

        function getAtivo() {
            return $this->ativo;
        } 

        function getOrigem() {
            return $this->origem;
        } 

        function getData() {
            return $this->data;
        } 

        function setId($id) {
            $this->id = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setDocumento($documento) {
            $this->documento = $documento;
        }

        function setCep($cep) {
            $this->cep = $cep;
        }

        function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        function setUf($uf) {
            $this->uf = $uf;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setAtivo($ativo) {
            $this->ativo = $ativo;
        } 

        function setOrigem($origem) {
            $this->origem = $origem;
        } 

        function setData($data) {
            $this->data = $data;
        } 
        
    }

