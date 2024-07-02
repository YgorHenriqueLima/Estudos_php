<?php 
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    public function renovarBolsa(){
      echo "a bolsa de {$this->getNome()} foi renovada";
    }

    public function pagarMensalidade(){
      echo "<p>{$this->nome} é bolsista! então paga com Desconto %</p>";
    }

    public function getBolsa() {
      return $this->bolsa;
    }
    
    public function setBolsa($value) {
      $this->bolsa = $value;
    }
}
?>