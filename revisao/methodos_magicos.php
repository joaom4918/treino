<div class="titulo">Methodos Magicos</div>

<?php
class Pessoa
{
    private $nome;
    private $idade;


    public function __construct($nome,$idade)
    {
        $this->nome=$nome;
        $this->idade=$idade;
    }

    
    public function __destruct()
    {
        echo "fim";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos ";
    }

    public function apresentar(){
        echo $this."<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado <br>";
        return 123;
    }

    public function __set($atrib,$valor){
        echo "alterando atributo não declarado<br>";
    }

    public function __call($methodo, $params)
    {
        echo "tentando executar o methodo $methodo<br>";
        echo "com parametros";
        print_r($params);
    }


}

$p=new Pessoa('joao',20);
$p->apresentar(); // chamando to string


$p->nomeCompleto="muito bom";//chamando o set
$p->nomeCompleto; //chamando set
$p->exec();


?>