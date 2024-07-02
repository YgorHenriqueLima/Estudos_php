<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function receberAum(){
        $this->setSalario($this->getSalario()+500);
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($value) {
        $this->especialidade = $value;
    }

    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($value) {
        $this->salario = $value;
    }
}
?>