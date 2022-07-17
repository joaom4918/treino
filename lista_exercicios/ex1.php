<!--  A imobiliária Imóbilis vende apenas terrenos retangulares. Faça um algoritmo para ler as
dimensões de um terreno e depois exibir a área do terreno -->
<div class="titulo">Exercicio 1</div>
<form action="#" method="post">
    <input type="number" name="base" placeholder="Digite a base"><br>
    <input type="number" name="altura" placeholder="Digite a altura"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 

$base=isset($_POST['base'])?$_POST['altura']:0;
$altura=isset($_POST['altura'])?$_POST['altura']:0;
$area=$base*$altura;

echo "$area";

?>