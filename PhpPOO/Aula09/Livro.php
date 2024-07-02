<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setAberto(false);
            $this->setPagAtual(0);
        }

        public function Detalhes(){
            echo <<< RESULT
                <div>
                    <p>Livro {$this->getTitulo()} Escrito por {$this->getAutor()}</p>
                    <p>Total de páginas: {$this->getTotPaginas()}</p>
                    <p>Página atual: {$this->getPagAtual()}</p>
                    <p>Está aberto o livro {$this->getTitulo()}?: {$this->getAberto()}</p>
                    <p>Leitor: {$this->leitor->getNome()}</p>
                </div>
            RESULT;
        }

        public function abrir(){
            $this->setAberto(true);
        }
        public function fechar(){
            $this->setAberto(false);
        }
        public function folhear($pagina){
            if($pagina > $this->totPaginas){
                $this->pagAtual = 0;
            }else {
                $this->pagAtual = $pagina;
            }
        }
        public function avancarPag(){
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        public function voltarPag(){
            $this->setPagAtual($this->getPagAtual() - 1);
        }
        

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($value) {
            $this->titulo = $value;
        }

        public function getAutor() {
                return $this->autor;
        }
        public function setAutor($value) {
            $this->autor = $value;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($value) {
            $this->totPaginas = $value;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($value) {
            $this->pagAtual = $value;
        }

        public function getAberto() {
        return $this->aberto;
        }
        public function setAberto($value) {
            $this->aberto = $value;
        }

        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($value) {
            $this->leitor = $value;
        }
    }
?>