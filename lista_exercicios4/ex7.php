<?php

if(count($_POST)>0){
    $erros=[];
    if(!filter_input(INPUT_POST,'str')){
        $erros['str']="voce não digitou nada";
    }
}
?>
<div class="titulo">Exercicio 7</div>

<form action="#" method="post">
    <input type="text" name="str" class="<?=$erros['str']?"is-invalid":'' ?>"  placeholder="Digite alguma coisa">
    <div class="invalid-feedback">
        <?=$erros['str'] ?>
    </div>
    <button class="btn btn-primary">inverter</button>
</form>

<?php

$str=$_POST['str'];

echo strrev($str);
?>