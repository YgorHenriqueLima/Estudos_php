<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos no PHP</title>
</head>
<body>
    <?php 
        //tipos escalares
        $nome = "Maria"; //String
        $idade = 20; //int
        $altura = 1.70; //float
        $casada = true; //boolean
        echo "seu nome é $nome, tem $idade anos, a altura é $altura e casada $casada";
        echo"<br>";
        //-----------------------//
        //0x = hexadecimal 0b = binário 0 = octal
        $v = 0x1A;
        $v2 = 010;
        $v3 = 3e2; // 3 x 10(2) coerção
        echo "o valor hexadecimal é $v, o valor octal é $v2 e o valor em base 10 é $v3";

        echo"<br>";
        $num = (int) "950"; //forçando o valor String a ser inteiro
        var_dump($num);
        //Arrays
        $vet = [6,2,5.7,"Maria",3,false];
        echo "<br>";
        var_dump($vet);


        //objetos

        class Pessoa{
            private $nome;
            private $idade;
            private $sexo;

            public function getNome() {
            return $this->nome;
            }
            public function setNome($value) {
            $this->nome = $value;
            }

            public function getIdade() {
            return $this->idade;
            }
            public function setIdade($value) {
            $this->idade = $value;
            }

            public function getSexo() {
            return $this->sexo;
            }
            public function setSexo($value) {
            $this->sexo = $value;
            }
        }

        $p = new Pessoa("joao",17,"M");
        var_dump($p);
    ?>
</body>
</html>