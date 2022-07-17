<!--Escreva um algoritmo para ler o nome e a idade de uma pessoa, e exibir quantos dias de vida
ela possui. Considere sempre anos completos, e que um ano possui 365 dias. Ex: uma pessoa
com 19 anos possui 6935 dias de vida; veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935
DIAS -->
<div class="titulo">Exercicio 4</div>
<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome"> <br>
    <input type="number" name="idade" placeholder="Digite sua idade"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 

$nome=isset($_POST['nome'])?$_POST['nome']:"####";
$idade=isset($_POST['idade'])?$_POST['idade']:"####";

$ano=365;

$dias_vida=$ano*$idade;

echo "$nome ja viveu tem $idade e ja viveu $dias_vida";

?>