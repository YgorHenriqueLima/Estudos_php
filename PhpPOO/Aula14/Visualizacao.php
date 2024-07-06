<?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    class Visualizacao {
        private Gafanhoto $espectador;
        private Video $filme;
        private $NovaNota;

        public function __construct($espectador, $filme)
        {
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews()+1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
        }

        public function statusVisualizacao(){
            echo <<< RESULT
            <div style="color:red; font-size:20px;">
                <span>{$this->espectador->getNome()} Assiste {$this->filme->getTitulo()}</span>
                <span></span>
            </div>
            RESULT;
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }
        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }
        public function avaliarPorcentagem($porcentagem){
            $this->NovaNota=0;
            if($porcentagem <= 20) {
                $this->NovaNota = 3;
            } elseif($porcentagem <= 50){
                $this->NovaNota = 5;
            } elseif($porcentagem <= 90){
                $this->NovaNota = 8;
            }else {
                $this->NovaNota = 10;
            }
        }

        public function getEspectador() {
            return $this->espectador;
        }
        public function setEspectador($value) {
            $this->espectador = $value;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setFilme($value) {
            $this->filme = $value;
        }

        public function getNovaNota() {
            return $this->NovaNota;
        }
        public function setNovaNota($value) {
            $this->NovaNota = $value;
        }
    }
?>