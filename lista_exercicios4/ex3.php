<?php


if(count($_POST)>0){

    $erros=[];

    if(!filter_input(INPUT_POST,'n1')){
        $erros['n1']="voce não digitou nenhum numero";

    }
}
?>

<div class="titulo">Exercicio 3</div>

<form action="#" method="post">
    <input type="number" name="n1" class="<?=$erros['n1']?'is-invalid':''  ?>" placeholder="Digite um numero">  <br>
    <div class="invalid-feedback">

    <?= $erros['n1']; ?>
    </div>
    <button class="btn btn-primary">Calcular</button>
</form>


<?php 

$n1=$_POST['n1'];

if($n1 %2==0){

    echo"par";
}else{
    echo "impar";
}
?>