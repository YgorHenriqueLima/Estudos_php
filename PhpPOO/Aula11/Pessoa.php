<?php 
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);            
        }

        public final function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($value) {
            $this->nome = $value;
        }

        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($value) {
            $this->idade = $value;
        }

        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($value) {
            $this->sexo = $value;
        }
    }
?>