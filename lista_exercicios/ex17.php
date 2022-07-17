<div class="titulo">Exercicio 17</div>

<form action="#" method="post">
<input type="number" name="horas" placeholder="Digite horas trabalhadas"> <br>
<input type="number" name="horas_extras" placeholder="Digite horas extras trabalhadas"> <br>
<button class="btn btn-primary">calcular</button>
</form>

<?php

$h=isset($_POST['horas'])?$_POST['horas']:0;
$ex=isset($_POST['horas_extras'])?$_POST['horas_extras']:0;
$hora_normal=10.00;
$hora_extra=15.00;
###########################
$salario_bruto=($h*$hora_normal)+$ex*$hora_extra;
$x=($salario_bruto*0.1);
$salario_liquido=$salario_bruto-$x;
echo "Salario Bruto $".number_format($salario_bruto,2)."<br>";
echo "Salario Liquido $".number_format($salario_liquido,2);

?>