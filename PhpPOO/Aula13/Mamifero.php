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

    class lobo extends Mamifero {
        public function emitirSom()
        {
            echo "<p>Auuuuuuuuuuuuuuuu!</p>";
        }
    }

    class Cachorro extends Lobo{
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
        public function reagirFrase($frase){
            if($frase == "Toma comida" || $frase == "Olá"){
                echo "<p>abanar e latir</p>";
            }else{
                echo "<p>rosnar</p>";
            }
        }

        public function reagirHora($hora, $min){
            if($hora<12){
                echo "<p>Abanar</p>";
            }elseif($hora>=16){
                echo "<p>Ignorar</p>";
            }else{
                echo "<p>Abanar e Latir</p>";
            }
        }

        public function reagirDono($dono){
            if($dono){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Rosnar e Latir</p>";
            }
        }

        public function reagirIdadePeso($idade, $peso){
            if($idade<5){
                if($peso<10){
                    echo "<p>Abanar</p>";
                }else{
                     echo "<p>Latir</p>";
                }
            }else {
                if($peso<10){
                    echo "<p>Rosnar</p>";
                }else{
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }
?>