<div class="titulo">Exercicio 10</div>
<form action="#" method="post">

    <input type="number" name="dia" placeholder="Digite dias Sem acidente"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php

$dia = isset($_POST['dia']) ? $_POST['dia'] : 0;
$mes=0;
$ano=0;

$mes=$dia/30;
$ano=$mes/12;
  echo "$dia dias sem acidentes<br>";
  echo intval($ano)." anos sem acidentes <br>"; 
  echo intval($mes)."mes sem acidentes <br>";




?>