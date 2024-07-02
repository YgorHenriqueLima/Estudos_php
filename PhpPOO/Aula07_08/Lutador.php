<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
        {
           $this->setNome($nome);
           $this->setNacionalidade($nacionalidade);
           $this->setIdade($idade);
           $this->setAltura($altura);
           $this->setPeso($peso);
           $this->setVitorias($vitorias);
           $this->setDerrotas($derrotas);
           $this->setEmpates($empates);
        }
        
        public function apresentar() {
            echo <<< RESULT
            <div>
                <p>Lutador: {$this->getNome()}</p>
                <p>Origem: {$this->getNacionalidade()}</p> 
                <p>{$this->getIdade()} anos</p>
                <p>{$this->getAltura()}m de altura</p>
                <p>Pesando: {$this->getPeso()}kg</p>
                <p>Ganhou: {$this->getVitorias()}</p>
                <p>Perdeu:  {$this->getDerrotas()}</p>
                <p>Empatou: {$this->getEmpates()}</p>
            </div>
            RESULT;
        }
        
        public function status() {
            echo <<< RESULT
                <div>
                    <p class="nome_lutador">{$this->getNome()}</p>
                    <p> é um peso {$this->getCategoria()}</p>
                    <p>{$this->getVitorias()}, Vitorias</p>
                    <p>{$this->getDerrotas()}, Derrotas</p>
                    <p>{$this->getEmpates()}, Empates</p>
                </div>
            RESULT;
        }
        
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    
        public function getNome() {
            return $this->nome;
        }
        
        public function setNome($value) {
            $this->nome = $value;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        
        public function setNacionalidade($value) {
            $this->nacionalidade = $value;
        }

        public function getIdade() {
            return $this->idade;
        }
        
        public function setIdade($value) {
            $this->idade = $value;
        }

        public function getAltura() {
            return $this->altura;
        }
        
        public function setAltura($value) {
            $this->altura = $value;
        }

        public function getPeso() {
            return $this->peso;
        }
        
        public function setPeso($value) {
            $this->peso = $value;
            $this->setCategoria();
        }

        public function getCategoria() {
            return $this->categoria;
        }
        
        public function setCategoria() {
            if($this->peso < 52.2){
                $this->categoria = "Inválido";
            }
            elseif ($this->peso <= 70.0) {
                $this->categoria = "Leve";
            }
            elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            }
            elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            }

        }

        public function getVitorias() {
            return $this->vitorias;
        }
        
        public function setVitorias($value) {
            $this->vitorias = $value;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }
        
        public function setDerrotas($value) {
            $this->derrotas = $value;
        }

        public function getEmpates() {
            return $this->empates;
        }
        
        public function setEmpates($value) {
            $this->empates = $value;
        }
    }
?>