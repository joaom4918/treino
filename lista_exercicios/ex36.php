<div class="titulo">Exercicio 36</div>

<form action="#" method="post">
    <input type="text" name="l1" placeholder="Digite lada 1 do triangulo"> <br>
    <input type="text" name="l2" placeholder="Digite lado 2 do triangulo"> <br>
    <button class="btn btn-primary">calcular</button><br>
    <img src="https://static.dicionariodesimbolos.com.br/upload/42/a0/triangulo-5_xl.jpeg" width="200"> <br>
   
</form>

<?php

use Calcular as GlobalCalcular;

$l1 = isset($_POST['l1']) ? $_POST['l1'] : 0;
$l2 = isset($_POST['l2']) ? $_POST['l2'] : 0;

class Calcular
{
    protected $l1;
    protected $l2;

    public function CalcularHipotenusa($l1, $l2)
    {
        $this->l1 = $l1;
        $this->l2 = $l2;
        $hip = ($l1 * 2) + ($l2 * 2);
        echo "o valor da hipotenusa $hip";
    }
}

$c=new Calcular();
$c->CalcularHipotenusa($l1,$l2);
?>