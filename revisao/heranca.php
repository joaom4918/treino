<div class="titulo">Herança</div>

<?php


class Pessoa{
    public $nome;
    public $idade;
    function __construct($nome,$idade)
    {
        $this->nome=$nome;
        $this->idade=$idade;
        echo "Pessoa criada";
    }

    function __destruct()
    {
        "Destruido";
    }
    public function apresentar(){
        echo "{$this->nome} e idade {$this->idade} <br>"; 
    }
}

class Usuario extends Pessoa{
    public $login;
    public $idade;


    public function __construct($nome,$idade,$login){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->login=$login;
        echo "Usuario Criado <br>";
    }

    public function __destruct()
    {
        echo "usuario diz tchau";
    }

    public function  apresentar(){
        // sobrescrevendo a função apresentar 
        parent::apresentar();
        echo "@{$this->login}";
    }



}

$usuario=new Usuario("joao marcos",18,"joao4936");
$usuario->apresentar();
?>