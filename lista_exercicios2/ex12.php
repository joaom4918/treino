<div class="titulo">Exercicio 12</div>

<form action="#" method="post">
    <input type="number" name="peso_peixes" placeholder="Digite peso de peixes"> <br>

    <button class="btn btn-primary">calcular</button>
</form>
<?php
$px=isset($_POST['peso_peixes'])?$_POST['peso_peixes']:0;
$ex=50;

$p=$px-$ex;
$multa=$p*4.00;

echo "$px kg<br>";
if($px>50){
    echo "$p Kg acima do limite de peso de peixes permitido<br>";
    echo "Multa por excesso R$".number_format($multa,2);
}


?>