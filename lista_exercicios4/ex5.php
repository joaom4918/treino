<?php

if(count($_POST)>0){

    $erros=[];
    if(!filter_input(INPUT_POST,'num')){
        $erros['num']="digite algum numero";
    }
}

?>

<div class="titulo">Exercicio 5</div>


<form action="#" method="post">

<input type="number" name="num" class="<?= $erros['num']?"is-invalid":'' ?>"> <br>

<div class="invalid-feedback">
    <?= $erros['num'] ?>
</div>

<button class="btn btn-primary">Mostrar Tabuada</button>
</form>

<?php 

$num=$_POST['num'];

for ($i=0; $i <=10 ; $i++) { 
    $mult=$num*$i;
    echo "$num X $i = $mult <br>";
}
?>