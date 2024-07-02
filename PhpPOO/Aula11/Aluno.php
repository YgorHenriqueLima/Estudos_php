<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        protected $matricula;
        protected $curso;
        
        public function pagarMensalidade(){
            if($this->getSexo() == "F"){
                echo "<p>pagando mensalidade de {$this->nome}</p>";
            }else{
                echo "<p>pagando mensalidade do {$this->nome}</p>";
            }
            
        }

        public function getMatricula() {
            return $this->matricula;
        }
        
        public function setMatricula($value) {
            $this->matricula = $value;
        }

        public function getCurso() {
            return $this->curso;
        }
        
        public function setCurso($value) {
            $this->curso = $value;
        }
    }
?>