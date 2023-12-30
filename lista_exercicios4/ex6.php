<?php 
if(count($_POST)>0){
    $erros=[];

    if(!filter_input(INPUT_POST,'ano')){
        $erros['ano']="voce não digitou nenhum ano de nasimento";
    }

    if(!filter_input(INPUT_POST,'ano_atual')){
        $erros['ano_atual']="voce não digitou o ano atual";
    }
}
?>
<div class="titulo">Exercicio 6</div>

<form action="#" method="post">
    <input type="text" class="<?=$erros['ano']?"is-invalid":'' ?>" name="ano" placeholder="digite ano de nasimento"><br>
    <div class="invalid-feedback">
        <?= $erros['ano'] ?>
    </div>
    <input type="text" name="ano_atual" class="<?=$erros['ano_atual']?"is-invalid":'' ?>" placeholder="Digite ano atual"> <br>
    <div class="invalid-feedback">
        <?=$erros['ano_atual'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 

$ano=$_POST['ano'];
$ano_atual=$_POST['ano_atual'];

$idade=$ano_atual-$ano;

echo "Idade $idade";

?>

