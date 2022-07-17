<div class="titulo">Construtor Destrutor</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome="anonimo",$idade=0)
    {
        $this->nome=$nome;
        $this->idade=$idade;
    }

    public function apresentar(){
        return "nome $this->nome e idade $this->idade";
    }

    public function __destruct()
    {
        echo "foi destruido";
    }
}

$p=new Pessoa("joao");
$p->idade=21;
echo $p->apresentar()."<br>";
unset($p);

$p2=new Pessoa("maria",40);
echo $p2->apresentar();





?>