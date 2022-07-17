<div class="titulo">Exercicio 18</div>
<form action="#" method="post">
    <input type="text" name="n1" placeholder="Digite 1° numero"><br>
    <input type="text" name="n2" placeholder="Digite 2° numero"><br>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php 
$n1=isset($_POST['n1'])?$_POST['n1']:0;
$n2=isset($_POST['n2'])?$_POST['n2']:0;

$x=$n1;
$y=$n2;
$x=$n2;
$y=$n1;
echo "X=$x Y=$y";

?>