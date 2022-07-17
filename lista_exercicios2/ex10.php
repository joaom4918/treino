<div class="titulo">Exercicio 10</div>

<form action="#" method="post">
    <input type="text" name="altura" placeholder="Digite sua altura"> <br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php

$altura=isset($_POST['altura'])?$_POST['altura']:0;
$x=(72.7*$altura)-58;

echo "peso ideal $x";
?>