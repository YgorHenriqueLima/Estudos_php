<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matr;
    private $curso;

    public function cancelarMatr(){
        echo "Cancelando a matricula";
    }
    public function getMatr() {
        return $this->matr;
    }
    public function setMatr($value) {
        $this->matr = $value;
    }

    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($value) {
        $this->curso = $value;
    }
    }
?>