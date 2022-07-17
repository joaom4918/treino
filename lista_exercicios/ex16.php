<div class="titulo">Exercicio 16</div>
<form action="#" method="post">
    <input type="text" name="celcius" placeholder="Digite temperatura em graus celcius"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$c=isset($_POST['celcius'])?$_POST['celcius']:0;
$f=($c*9/5)+32;

echo "$f";
?>