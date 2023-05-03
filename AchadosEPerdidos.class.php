<?php 
    class AchadosEPerdidos{

        private $codigo;
        private $titulo;
        private $descricao;
        private $dataTab;
        private $statusTab;
        private $pso;

        public function __construct($titulo, $descricao, $statusTab, $codigo = null){
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->statusTab = $statusTab;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getStatusTab(){
            return $this->statusTab;
        }
        public function getDataTab(){
            return $this->dataTab;
        }
    }
?>