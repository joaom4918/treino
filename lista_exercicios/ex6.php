<div class="titulo">Exercicio</div>

<form action="#"method="post">
    <input type="text" name="peso" placeholder="Digite o peso do prato"> <br>
    <button class="btn btn-primary">Calcular peso</button>
</form>

<?php
$preco_prato=12.00;
$peso=isset($_POST['peso'])?$_POST['peso']:0;

$total=$peso*$preco_prato;

echo 'valor a receber é'.' '.number_format($total,2);


?>