<?php namespace Outro\Nome;

use Classe;

?>
<div class="titulo">Use AS</div>

<?php
echo __NAMESPACE__.'<br>'; 
include ("use_as_arquivo.php");

function soma($a,$b){
    return $a . $b;# errado mais só pra diferenciar

}

class Classe_A{ 
    public $var;
    function func(){
        echo __NAMESPACE__.' -> '.__CLASS__.' -> '.__METHOD__.'<br>';
    }
}

echo \Nome\Bem\Grande\constante.'<br>';
use const  \Nome\Bem\Grande\constante;
echo constante;

use function \Nome\Bem\Grande\soma as somaVerdade;
echo somaVerdade(4,4).'<br>';
use \Nome\Bem\Grande as ctx;
#usando namespace do arquivo atual
$a = new Classe_A();
$a->func().'<br>';
#usando a classe do outro namespace com o mesmo nome para evitar conflito
$b= new  \Nome\Bem\Grande\Classe_A;
$b->func().'<br>';

#dando um apelido ao namespace 
$d=new ctx\Classe_A;
$d->func(); 



?>