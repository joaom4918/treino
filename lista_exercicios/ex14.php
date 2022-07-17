<div class="titulo">Exercicio 14</div>

<form action="#" method="post">
    <input type="text" name="conta" placeholder="Digite total da conta"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 

$conta=isset($_POST['conta'])?$_POST['conta']:0;
$total_carlos=$conta/3;
$total_andre=$conta/3;
$total_felipe=$conta/3;

echo "Carlos $".round($total_carlos)."<br>";
echo "Andre $".round($total_andre)."<br>";
echo "Felipe $".number_format($total_felipe,2);



?>