<?php
    require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;

        public function __construct($peso, $idade, $membros, $corPelo)
        {
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorPelo($corPelo);
        }

        public function CaracMamifero(){
            echo <<< RESULT
                <div>
                    <p>Peso: {$this->getPeso()}</p>
                    <p>Idade: {$this->getIdade()}</p>
                    <p>Membros: {$this->getMembros()}</p>
                    <p>Cor do Pelo: {$this->getCorPelo()}</p>
                </div>
            RESULT;
        }

        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($value) {
            $this->corPelo = $value;
        }
        public function locomover(){
            echo "<p>correndo</p>";
        }
        public function alimentar(){
            echo "<p>Mamando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Mamífero</p>";
        }
    }

    class Canguru extends Mamifero{
        public function usarBolsa(){
            echo "<p>Usando bolsa</p>";
        }
        public function locomover()
        {
            echo "<p>Saltando</p>";
        }
    }

    class Cachorro extends Mamifero{
        public function enterrarOsso(){
            echo "<p>Enterrando Osso</p>";
        }
        public function abanarRabo() {
            echo "<p>abanando o rabo</p>";
        }
        public function emitirSom()
        {
            echo "<p>Au! Au! Au!</p>";   
        }
    }
?>