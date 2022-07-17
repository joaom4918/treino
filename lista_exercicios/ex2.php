<!-- Faça um algoritmo para calcular quantas ferraduras são necessárias para equipar todos os
cavalos comprados para um haras -->
<div class="titulo">Exercicio 2</div>

<form action="#" method="post">
    <input type="number" placeholder="Digite numero de cavalos comprados" name="cavalos"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 
$cav=isset($_POST['cavalos'])?$_POST['cavalos']:0;

$ferraduras=$cav*4;

echo "o numero de ferraduras necessario é de $ferraduras";
?>