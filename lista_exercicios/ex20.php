<div class="titulo">Exercicio 20</div>

<form action="#" method="post">
    <input type="number" name="novelo" placeholder="Digite quantos novelos voce ira usar"> <br>
    <input type="number" name="blusas" placeholder="Digite quantos blusas voce ira fazer"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php

$n=isset($_POST['novelo'])?$_POST['novelo']:0;
$b=isset($_POST['blusas'])?$_POST['blusas']:0;

$x=$n*$b;

echo "serão usados $x novelos para fazer $b blusas";



?>