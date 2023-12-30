<?php

namespace lista_Exercicios3\ex8;

use DateTime;
use DateTimeZone;
use Exception;
use methodos_magicos;

?>

<div class="titulo">Exercicios 8</div>
<?php
date_default_timezone_set('America/Sao_Paulo');

include('gets_sets.php');

abstract class Produto
{

    public $codigo;
    public $preco;

    public function __construct($codigo, $preco)
    {
        $this->codigo = $codigo;
        $this->preco = $preco;
    }
}

class Dvd extends Produto
{
    use methodos_magicos;
    private  $titulo;
    private $ano;

    public function __construct($titulo, $ano)
    {
        $this->titulo = $titulo;
        $this->ano = $ano;
    }
}




interface Perecivel
{
    public function estaVencido();
}




class Leite extends Produto implements Perecivel
{
    use  methodos_magicos;
    private $marca;
    private $valume;
    private $dataValidade;

    public function __construct($marca, $volume, $dataValidade)
    {
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
        $dataValidade = DateTime::createFromFormat('j-M-Y', $dataValidade);
    }

    public function estaVencido()
    {

        $hoje = date("d/m/Y");

        if ($hoje > $this->dataValidade) {
            return "vencido";
        } else {
            return "dentro da validade";
        }
    }


    

    
}




$dvd1 = new Dvd('Piratas Do Caribe', 2006);
$dvd1->codigo = 123;
$dvd1->preco = 50.00;
//var_dump($dvd1); 

$milk1 = new Leite('frimesa', 2, '08/12/2022');

echo $milk1->estaVencido();






?>