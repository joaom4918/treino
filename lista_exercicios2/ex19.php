<div class="titulo">Exercicio 19</div>

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

class Ordenador{
    protected $n1;
    protected $n2;
    protected $n3;

    public function __construct($n1,$n2,$n3)
    {
        $this->n1=$n1;
        $this->n2=$n2;
        $this->n3=$n3;
    }

    public function OrdenarNumeros($n1,$n2,$n3){
        $x=array($n1,$n2,$n3);
        asort($x);
        foreach($x as $chave){
            echo "$chave ";
        }

    }

}

$n=new Ordenador($n1,$n2,$n3);
$n->OrdenarNumeros($n1,$n2,$n3);



?>