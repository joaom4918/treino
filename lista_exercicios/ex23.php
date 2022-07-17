<div class="titulo">Exercicio 23</div>

<form action="#" method="post">
    <input type="number" name="agua" placeholder="Digite qtde de  agua"><br>
    <input type="number" name="suco_mara" placeholder="Digite qtde de suco "><br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php

$a=isset($_POST['agua'])?$_POST['agua']:0;
$sm=isset($_POST['suco_mara'])?$_POST['suco_mara']:0;

$litro_agua=$a/1000;
$lsm=$sm/1000;



?>