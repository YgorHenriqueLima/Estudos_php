<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    private $salario;

    public function mudarTrabalho(){
        $this->trabalhando =! $this->trabalhando;
    }

    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($value) {
        $this->setor = $value;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($value) {
         $this->trabalhando = $value;
    }

    public function getSalario() {
      return $this->salario;
    }
    public function setSalario($value) {
      $this->salario = $value;
    }
}
?>