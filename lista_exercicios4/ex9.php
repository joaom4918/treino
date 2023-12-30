<?php 
if(count($_POST)>0){
    $erros=[];
    if(!filter_input(INPUT_POST,'frase')){
        $erros['frase']="voce não digitou nenhuma frase";
    }
}
?>
<div class="titulo">Exercicio 9</div>

<form action="#" method="post">
<label for="frase">frase</label> <br>
<textarea name="frase" class="<?=$erros['frase']?"is-invalid":'' ?>" id="" cols="30" rows="10"></textarea>
<div class="invalid-feedback">
    <?= $erros['frase'] ?>
</div>
<button class="btn btn-primary">clicar</button>
</form>

<?php 
$frase=$_POST['frase'];


echo "$frase <br>";
echo "numero de palacras na frase ".str_word_count($frase);
?>