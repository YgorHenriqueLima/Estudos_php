<?php 

    class Conta{
        public $numConta;
        protected $tipo; // o tipo vai aceitar conta corrente(cc) e conta poupança(cp)
        private $dono;
        private $saldo;
        private $status; // status é o acesso a conta, ela é do tipo boolean  

        public function __construct($dono)
        {
            $this->setDono($dono);
            $this->setSaldo(0);
            $this->setStatus(false);
        }
        
        public function getNumConta() {
            return $this->numConta;
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }
        
        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getStatus() {
            return $this->status;
        }
        public function setStatus($value) {
            $this->status = $value;
        }

        public function abrirConta($tipo_da_conta)
        {
            $this->setTipo($tipo_da_conta);
            $this->setStatus(true);
            
            if($tipo_da_conta == "cc"){
                $this->setSaldo(50);
            }
            
            else if ($tipo_da_conta == "cp"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo "ERRO! Conta com dinheiro";
            } 
            else if ($this->getSaldo() < 0){
                echo "ERRO! Conta em débito";
            }
            else {
                $this->setStatus(false);
            }
        }

        public function depositar($valor_de_deposito){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo()+$valor_de_deposito);
                echo "<p>Depósito de R$ $valor_de_deposito na conta de {$this->getDono()}</p>";
            }
            else {
                echo "IMPOSSÍVEL DEPOSITAR, sua conta está fechada";
            }
        }


        public function sacar($valor_de_saque){
            if($this->getStatus()){
                if($this->getSaldo() > $valor_de_saque){
                    $this->setSaldo($this->getSaldo() - $valor_de_saque);
                    echo "<p>Saque de R$ $valor_de_saque na conta de {$this->getDono()}</p>";
                }
                else {
                    echo "<p>Saldo Insuficiente<p>";
                }
            } else {
                echo "<p>não posso sacar de uma conta fechada</p>";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "cc") {
                $valor_mensalidade = 12.0;    
            }

            if($this->getTipo() == "cp"){
                $valor_mensalidade = 20.0;
            }

            if($this->getStatus()){
                if ($this->getSaldo() > $valor_mensalidade){
                    $this->setSaldo($this->getSaldo() - $valor_mensalidade);
                    echo "<p>Mensalidade de R$ $valor_mensalidade debitada na conta de {$this->getDono()}</p>";
                }
                else{
                    echo "IMPOSSÍVEL PAGAR, CONTA NÃO ABERTA";
                }
            }
        }

        public function menu(){
            echo <<< RESULT
                <div>
                    <p>Dono: {$this->getDono()}</p>
                    <p>Número da Conta: {$this->getNumConta()}</p>
                    <p>Status: {$this->getStatus()}</p>
                    <p>Tipo da Conta: {$this->getTipo()}</p>
                    <p>Saldo: {$this->getSaldo()} </p>
                </div>
            RESULT;
        }
    }
?>