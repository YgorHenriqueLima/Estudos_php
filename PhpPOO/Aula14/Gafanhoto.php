<?php 
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->setLogin($login);
            $this->setTotAssistido(0);
        }

        public function StatusGafanhotos(){
            echo <<< RESULT
                <div>
                    <span>Nome: {$this->getNome()}</span><br>
                    <span>Idade:{$this->getIdade()} </span><br>
                    <span>Sexo: {$this->getSexo()}</span><br>
                    <span>Experiência:{$this->getExperiencia()} </span><br>
                    <span>login:{$this->getLogin()} </span><br>
                    <span>TotAssistido: {$this->getTotAssistido()} </span><br>
                </div>
            RESULT;
        }

        public function AssistirMaisUm(){
            $this->setTotAssistido($this->getTotAssistido()+1);
        }

        public function getLogin() {
            return $this->login;
        }
        public function setLogin($value) {
            $this->login = $value;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistido($value) {
            $this->totAssistido = $value;
        }
    }
?>