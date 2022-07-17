<div class="titulo">Exercicio 12</div>

<form action="#" method="post">
    <input type="number" name="n" placeholder="Digite um numero interio"> <br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 
$n=isset($_POST['n'])?$_POST['n']:0;
$d=$n/10;
$c=$n/100;

echo "Unidades $n <br>"; 
echo "Dezenas $d <br>"; 
echo "Centenas $c"; 


?>