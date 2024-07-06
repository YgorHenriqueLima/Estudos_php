<?php 
   abstract class Animal{
        protected $peso;
        protected $idade;
        protected $membros;
        
        public abstract function locomover();
        public abstract function alimentar();
        public abstract function emitirSom();

        public function __construct($peso, $idade, $membros)
        {
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
        }

        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($value) {
            $this->peso = $value;
        }
    
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($value) {
            $this->idade = $value;
        }
    
        public function getMembros() {
            return $this->membros;
        }
        public function setMembros($value) {
            $this->membros = $value;
        }
    }
?>