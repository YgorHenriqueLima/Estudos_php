<?php 
require_once 'Lutador.php';
class Luta {
    // atributos 
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //métodos    

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0: // EMPATE
                    echo "<p id='empate'>empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // DESAFIADO VENCE 
                    echo "<p id='desafiado'>{$this->desafiado->getNome()} vence</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // DESAFIANTE VENCE
                    echo "<p id='desafiante'>{$this->desafiante->getNome()} vence </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }
        else {
            echo "<p>Luta não pode ser acontecer</p>";
        }
    } 

    public function getDesafiado() {
      return $this->desafiado;
    }
    public function setDesafiado(Lutador $desafiado) {
      $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
      return $this->desafiante;
    }
    public function setDesafiante(Lutador $desafiante) {
      $this->desafiante = $desafiante;
    }

    public function getRounds() {
      return $this->rounds;
    }
    public function setRounds($value) {
      $this->rounds = $value;
    }

    public function getAprovada() {
      return $this->aprovada;
    }
    public function setAprovada($value) {
      $this->aprovada = $value;
    }
}
?>