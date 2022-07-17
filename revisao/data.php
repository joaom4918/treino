<div class="titulo">Data</div>

<?php

class Data
{

    public $dia=01;
    public $mes="janeiro";
    public $ano=1970;


    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }


}



$data2=new Data();
$data2->dia=16;
$data2->mes=06;
$data2->ano=2020;
$data2->apresentar();

$data=new Data();
$data->dia=12;
$data->mes=06;
$data->ano=2018;
$data->apresentar();






?>