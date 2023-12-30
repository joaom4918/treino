<div class="titulo">exercicio 11</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite nome "> <br>
    <input type="number" name="idade" placeholder="Digite idade"> <br>
    <button class="btn btn-primary">locar</button>
</form>
<?php



$nome = isset($_POST['nome']) ? $_POST['nome'] : "generico";
$idade = isset($_POST['idade']) ? $_POST['idade'] : 0;


class IndicacaoException extends Exception{
    public function __construct($message,$code=0,$previus=null)
    {
        parent::__construct($message,$code,$previus);
    }
}

class Cliente extends IndicacaoException
{
    public  $nome;
    public $idade;
    

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function VerificarFaixa($idade){
       
        try{
            if($idade < 18){
                throw  new IndicacaoException ("Usuario menor de 18 anos"); 
            }elseif($idade >18 && $idade <100){
                throw new IndicacaoException ("Usuario maior de 18 anos");

            }elseif($idade > 100){
                throw  new IndicacaoException ("Usuario centenario ou erro ao Digitar idade");
            }
        }catch(Exception $e){
            echo "Aviso ".$e->getMessage();
        }
        return "$this->nome tem $this->idade anos";
    }
}

$cliente1=new Cliente($nome,$idade);
$cliente1->VerificarFaixa($idade);




?>