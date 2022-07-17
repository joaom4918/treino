<div class="titulo">Exercicio 8</div>

<form action="#" method="post">
    <input type="text" name="nota1" placeholder="Digite a 1° nota"> <br>
    <input type="text" name="nota2" placeholder="Digite a 2° nota"> <br>
    <input type="text" name="nota3" placeholder="DIgite a 3° nota"> <br>
    <button class="btn btn-primary">media</button>
</form>
<?php

$n1=isset($_POST['nota1'])?$_POST['nota1']:0;
$n2=isset($_POST['nota2'])?$_POST['nota2']:0;
$n3=isset($_POST['nota3'])?$_POST['nota3']:0;
// pesos das notas 1,2,3 somando da 6
$peso1=1;
$peso2=2;
$peso3=3;

$x=$n1*$peso1;
$y=$n2*$peso2;
$j=$n3*$peso3;
$z=($x+$y+$j)/6;
echo $z;






?>
