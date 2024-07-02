<?php 
    require_once 'Aluno.php';
    class Tecnico extends Aluno {
        private $registroProfissional;
        public function praticar(){
            echo "<p>praticando</p>";
        }
        public function getRegistroProfissional() {
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($value) {
            $this->registroProfissional = $value;
        }
    }
?>