<?php 
    require_once 'Animal.php';
    class Peixe extends Animal {
        private $corEscama;

        public function __construct($peso, $idade, $membros, $corEscama)
        {
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorEscama($corEscama);
        }

        public function CaracPeixe(){
            echo <<< RESULT
                <div>
                    <p>Peso: {$this->getPeso()}</p>
                    <p>Idade: {$this->getIdade()}</p>
                    <p>Membros: {$this->getMembros()}</p>
                    <p>Cor da Escama: {$this->getCorEscama()}</p>
                </div>
            RESULT;
        }

        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($value) {
            $this->corEscama = $value;
        }

        public function locomover(){
            echo "<p>Nadando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo substâncias</p>";
        }   
        public function emitirSom(){
            echo "<p>peixe não faz som</p>";
        }
        public function soltarBolha(){
            echo "<p>Soltou uma bolha</p>";
        }
    }

    class Goldfish extends Peixe{
        
    }
?>