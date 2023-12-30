<?php namespace Nome\Bem\Grande;?>  


<?php


const constante=123;

function soma($a,$b){
    return $a + $b;
}

class Classe_A{
    public $var;

    function func(){
        echo __NAMESPACE__.' -> '.__CLASS__.' -> '.__METHOD__.'<br>';
    }
}


?>