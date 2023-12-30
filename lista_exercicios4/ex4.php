<?php

if(count($_POST)>0){

    $erros=[];

    if(!filter_input(INPUT_POST,'ano')){
        $erros['ano']="voce não digitou nenhum ano";

    }
}
?>

<div class="titulo">Exercicio 4</div>

<form action="#" method="post">
    <input type="number" name="ano" class="<?=$erros['ano']?'is-invalid':'' ?>" placeholder="Digite um ano"> <br>

    <div class="invalid-feedback">
        <?= $erros['ano'] ?>
    </div>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php 

$ano=$_POST['ano'];

if($ano %4==0){

    echo "$ano é um ano bisexto";
}else{
    echo "$ano não é um ano bisexto";
}
?>