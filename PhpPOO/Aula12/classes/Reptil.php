<?php 
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;

        public function __construct($peso, $idade, $membros, $corEscama)
        {
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorEscama($corEscama);
        }

        public function CaracReptil(){
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
            echo "<p>Rastejando</p>";
        }
        public function alimentar(){
            echo "<p>Comendo vegetais</p>";
        }
        public function emitirSom(){
            echo "<p>som de réptil</p>";
        }
    }

    class Cobra extends Reptil{

    }
    class Tartaruga extends Reptil{
        public function locomover()
        {
            echo "<p>Andando bem devagar</p>";
        }        
    }
?>