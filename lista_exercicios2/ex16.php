<div class="titulo">Exercicio 16</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"> <br>
    <input type="number" name="n2" placeholder="Digite 2° numero"> <br>
    <input type="number" name="n3" placeholder="Digite 3° numero"> <br>
    <button class="btn btn-primary">ordenar</button>
</form>

<?php
$n1=isset($_POST['n1'])?$_POST['n1']:0;
$n2=isset($_POST['n2'])?$_POST['n2']:0;
$n3=isset($_POST['n3'])?$_POST['n3']:0;

$x=array($n1,$n2,$n3);
ksort($x);
foreach($x as $valor){
    echo "$valor<br>";
}


?>