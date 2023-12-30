<?php

namespace lista_Exercicios3\ex12;
use DivisionByZeroError;
use Exception;


?>
<div class="titulo">Exercicio 12</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"> <br>
    <input type="number" name="n2" placeholder="Digite 2° numero"> <br>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php

$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;

class CalcX
{

    private $n1;
    private $n2;
    
   
    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function __get($atrib)
    {
    }

    public function __set($atrib,$valor){
       
    }


    public function divsao($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $resultado = $this->n1 / $this->n2;
   try{
    if($n2==0){
        throw new DivisionByZeroError("Divisão por zero");
    }elseif(is_float($resultado)){
        throw new Exception("Numero Quebrado");
    }else{
        return "$resultado Sucesso";
    }
   }catch(DivisionByZeroError $e){
    echo "Erro ".$e->getMessage();
   }catch(Exception $e){
    echo "Aviso".$e->getMessage();
   }

    }
}



$x = new CalcX($n1,$n2);
echo $x->divsao($n1,$n2);
var_dump($x); 









?>