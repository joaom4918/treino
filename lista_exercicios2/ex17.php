<div class="titulo">Exercicio 17</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"> <br>
    <input type="number" name="n2" placeholder="Digite 2° numero"> <br>
    <input type="number" name="n3" placeholder="Digite 3° numero"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php

$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;
$n3 = isset($_POST['n3']) ? $_POST['n3'] : 0;
interface MaiorMenor
{
    public function CalcularMaiorMenor($n1, $n2, $n3);
}

class Calcular  implements MaiorMenor
{
    protected  $n1;
    protected  $n2;
    protected  $n3;

    public function __construct($n1,$n2,$n3)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n3 = $n3;
        
    }

    public function CalcularMaiorMenor($n1, $n2, $n3)
    {
      
        if($n1>$n2 && $n1>$n3){
            echo "$n1 maior ";
        }elseif($n2>$n1 && $n2>$n3){
            echo "$n2 maior ";
        }elseif($n3>$n1 && $n3>$n2){
            echo "$n3 maior ";
        }

        if($n1<$n2 && $n1<$n3){
            echo "$n1 menor ";
        }elseif($n2<$n1 && $n2<$n3){
            echo "$n2 menor";
        }elseif($n3<$n1 && $n3<$n3){
            echo "$n3 menor";
        } 
        
    }
  
}

$c = new Calcular($n1,$n2,$n3);
echo $c->CalcularMaiorMenor($n1,$n2,$n3);




?>