<div class="titulo">Exercicio 7</div>

<form action="#" method="post">
    <input type="number" name="salario_hora" placeholder="Digite salario por hora"> <br>
    <input type="number" name="horas_trabalhadas" placeholder="Digite horas trabalhadas  no mes"> <br>
    <button class="btn btn-primary">Calcular</button>
</form>
<?php
$sal_hora=isset($_POST['salario_hora'])?$_POST['salario_hora']:0;
$horas_trab=isset($_POST['horas_trabalhadas'])?$_POST['horas_trabalhadas']:0;
$salario_total=$sal_hora*$horas_trab;

echo "Salario Total $".number_format($salario_total,2);
?>