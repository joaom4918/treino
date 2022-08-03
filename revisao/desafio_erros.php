<div class="titulo">Desafio Erros </div>


<?php

interface Template{
    public function metodo1();
    public function metodo2($parametro);
}


abstract class ClasseABstrata implements Template {

    public function metodo1(){
        echo "executando metodo1";
    }

    public function metodo2($parametro){
        echo "executando metodo2";
    }
    public static function metodo3(){
        echo "Estou Funcionando";
    }
}

class Classe extends  ClasseABstrata {

    public $parametro;
    public function __construct($parametro)
    {
        $this->parametro=$parametro; 
    }
}

$exemplo = new Classe('teste');
$exemplo->metodo3;
ClasseABstrata::metodo3();
?>