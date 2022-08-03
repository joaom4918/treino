<div class="titulo">Exercicio 25</div>

<?php

class Estado
{
    protected  $nome;
    protected $sigla;

    public function __construct($nome, $sigla)
    {
        $this->nome = $nome;
        $this->sigla = $sigla;
        
    }
}

class Cidade extends Estado
{
    protected $nome;
    protected $estado;

    public function __construct($nome, $estado)
    {
        $this->nome = $nome;
        $this->estado = $estado;
    }
}


$estado = new Estado('Parana','PR');
$cidade = new Cidade('Maringa',$estado);



class Pessoa extends Cidade{
    protected $nome;
    protected $data_nas;
    protected $cpf;
    protected $cidade;

    public function __construct($nome,$data_nas,$cpf,$cidade)
    {
        $this->nome=$nome;
        $this->data_nas=$data_nas;
        $this->cpf=$cpf;
        $this->cidade=$cidade;        
    }

    public function Imprimir(){
        echo "$this->nome<br>";
        echo "$this->data_nas<br>";
        echo "$this->cpf <br>";
        echo $this->cidade->nome. "-".$this->cidade->estado->sigla;
    
    }





}

$p1=new Pessoa("maria","12/09/1999","214578903",$cidade);
$p1->Imprimir()."<br>";
var_dump($p1); 
?>