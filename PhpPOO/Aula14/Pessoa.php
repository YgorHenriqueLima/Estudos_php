<?php 
   abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }

        protected function ganharExp($n){
            $this->setExperiencia($this->getExperiencia()+$n);
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
        public function getExperiencia() {
            return $this->experiencia;
        }
        public function setExperiencia($value) {
            $this->experiencia = $value;
        }
    }
?>