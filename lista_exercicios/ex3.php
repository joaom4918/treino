<div class="titulo">Exercicios 3</div> 

<form action="#" method="post">
    <input type="number" name="q_pao" placeholder="digite a quantidade de pães vendididos"><br>
    <input type="number" name="q_broa" placeholder="digite a quantidade de broas vendidios"><br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 

$preco_pao=0.12;
$preco_broa=1.50;


$qtde_pao=isset($_POST['q_pao'])?$_POST['q_pao']:0;
$qtde_broa=isset($_POST['q_broa'])?$_POST['q_broa']:0;

$total_pao=$qtde_pao*$preco_pao;
$total_broa=$qtde_broa*$preco_broa;
$total_vendas=$total_pao+$total_broa;
$poupanca=$total_vendas* 10/100; 
echo" total de pães vendidios $total_pao<br>";
echo "total de broas vendidas $total_broa<br>";
echo "total arrecado $total_vendas<br>";
echo "poupança  $poupanca";






?>