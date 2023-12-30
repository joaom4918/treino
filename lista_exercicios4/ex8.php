<?php 

if(count($_POST)>0){
    $erros=[];
    if(!filter_input(INPUT_POST,'num')){
        $erros['num']="voce não digitou nenhum numero";
    }
}
?>
<div class="titulo">Exercicio 8</div>
<form action="#" method="post">

    <input type="number" name="num" class="<?=$erros['num']?"is-invalid":'' ?>" placeholder="Digite um numero"> <br>
    <div class="invalid-feedback">
        <?=$erros['num'] ?>
    </div>
    <button class="btn btn-primary">clicar</button>
</form>

<?php
$numero_aleatorio=rand(0,5);
$num=$_POST['num'];
echo"numero aleatorio gerado $numero_aleatorio<br>";
echo "numero que voce digitou $num<br>";

if($num == $numero_aleatorio){
    echo "voce acertou o numero gerado parabens";
}

?>