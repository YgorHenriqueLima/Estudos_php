<?php 
    require_once 'Animal.php';
    class Ave extends Animal {
        private $corPena;

        public function __construct($peso, $idade, $membros, $corPena)
        {
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorPena($corPena);
        }

        public function CaracAve(){
            echo <<< RESULT
                <div>
                    <p>Peso: {$this->getPeso()}</p>
                    <p>Idade: {$this->getIdade()}</p>
                    <p>Membros: {$this->getMembros()}</p>
                    <p>Cor da Pena: {$this->getCorPena()}</p>
                </div>
            RESULT;
        }


        public function getCorPena() {
            return $this->corPena;
        }
        public function setCorPena($value) {
            $this->corPena = $value;
        }
        
        public function locomover(){
            echo "<p>Voando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo Frutas</p>";
        }
        public function emitirSom(){
            echo "<p>som de ave</p>";
        }

        public function fazerNinho(){
            echo "<p>Construindo um ninho</p>";
        }
    }   

    class Arara extends Ave {
        
    }
?>