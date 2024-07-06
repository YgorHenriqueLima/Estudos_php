<?php 
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        private $media;

        public function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function StatusVideo(){
            echo <<< RESULT
                <div>
                    <span>Título do Vídeo: {$this->titulo}</span><br>
                    <span>Avaliação: {$this->avaliacao}</span><br>
                    <span>Views: {$this->views}</span><br>
                    <span>Curtidas: {$this->curtidas}</span><br>
                    <span>Reproduzindo... {$this->reproduzindo}</span><br>
                </div>
            RESULT;
        }

        public function play(){
            $this->setReproduzindo(true);
            echo "<p>O vídeo está ligado</p>";
        }
        public function pause(){
            $this->setReproduzindo(false);
            echo "<p>O vídeo está pausado</p>";
        }
        public function like(){
            $this->setCurtidas($this->getCurtidas()+1);
        }
        
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($value) {
            $this->titulo = $value;
        }

        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($avaliacao) {
            $this->media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao = $this->media;
        }

        public function getViews() {
            return $this->views;
        }
        public function setViews($value) {
            $this->views = $value;
        }

        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($value) {
            $this->curtidas = $value;
        }

        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($value) {
            $this->reproduzindo = $value;
        }
    }
?>