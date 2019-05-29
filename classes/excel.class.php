<?php

class Excel{
        
        private $extesoesPermitidas;
        private $extensaoArquivo;
        private $diretorio;
        private $nomeArquivo;
        private $novoNome;
        private $diretorioTemporario;
        
        public function Excel($arquivo) {
            
            $this->setExtesoesPermitidas(array("xlsx","csv"));
            $this->setDiretorio("planilhas/");
            $this->setNomeArquivo($arquivo["name"]);
            $this->setDiretorioTemporario($arquivo["tmp_name"]);
            
            $this->pegaExtensaoArquivo($arquivo);
            
            if ($this->validaExensao($arquivo)) {
                echo 'É uma planilha com extenção xlsx ou csv<br>';
            }else{
                echo 'Não é uma planilha';
            }
            $this->setNovoNome("Silvia.xlsx");
            
            if ($this->guardaNaPasta($arquivo)) {
                echo 'Guardado na pasta';
            }else{
                echo 'Erro ao guardar na pasta<br>';
            }
            
            
        }
        
        public function pegaExtensaoArquivo ($arquivo){
            
            $extensaoArquivoPassado = pathinfo($arquivo["name"], PATHINFO_EXTENSION);
            $this->setExtensaoArquivo($extensaoArquivoPassado);
            
        }

        public function validaExensao(){
            
            $extensoes = $this->getExtesoesPermitidas();
            $retorno = in_array($this->extensaoArquivo, $extensoes);
            
            return $retorno;
        }

        public function guardaNaPasta() {
            
            $retorno = move_uploaded_file($this->getDiretorioTemporario(), $this->getDiretorio().$this->getNovoNome());
            
            return $retorno;
        }
                
        public function getExtesoesPermitidas() {
            return $this->extesoesPermitidas;
        }

        public function setExtesoesPermitidas($extesoesPermitidas) {
            $this->extesoesPermitidas = $extesoesPermitidas;
        }
        public function getExtensaoArquivo() {
            return $this->extensaoArquivo;
        }

        public function setExtensaoArquivo($extensaoArquivo) {
            $this->extensaoArquivo = $extensaoArquivo;
        }

        public function getDiretorio() {
            return $this->diretorio;
        }

        public function setDiretorio($diretorio) {
            $this->diretorio = $diretorio;
        }

        public function getNomeArquivo() {
            return $this->nomeArquivo;
        }

        public function setNomeArquivo($nomeArquivo) {
            $this->nomeArquivo = $nomeArquivo;
        }

        public function getNovoNome() {
            return $this->novoNome;
        }

        public function setNovoNome($novoNome) {
            $this->novoNome = $novoNome;
        }
        public function getDiretorioTemporario() {
            return $this->diretorioTemporario;
        }

        public function setDiretorioTemporario($diretorioTemporario) {
            $this->diretorioTemporario = $diretorioTemporario;
        }



 }
                


