<div class="titulo">Exercicio 21</div> 

<form action="#" method="post">
    <input type="number" name="qtde1Centavo" placeholder="Digite qtde moedas de 1 centavo"> <br>
    <input type="number" name="qtde5Centavos" placeholder="Digite qtde moedas de 5 centavo"> <br>
    <input type="number" name="qtde10Centavos" placeholder="Digite qtde moedas de 10 centavo"> <br> 
    <input type="number" name="qtde25Centavos" placeholder="Digite qtde moedas de 25 centavo"> <br> 
    <input type="number" name="qtde50Centavos" placeholder="Digite qtde moedas de 50 centavo"> <br>
    <input type="number" name="qtde_1real" placeholder="Digite qtde moedas de 1 real"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php

$qtde_1centavo=isset($_POST['qtde1Centavo'])?$_POST['qtde1Centavo']:0;
$totalMoeda1cent=$qtde_1centavo*0.01;

$qtde_5centavos=isset($_POST['qtde5Centavos'])?$_POST['qtde5Centavos']:0; 
$totalMoeda5cent=$qtde_5centavos*0.05;

$qtde_10centavos=isset($_POST['qtde10Centavos'])?$_POST['qtde10Centavos']:0; 
$totalMoeda10cent=$qtde_10centavos*0.10;

$qtde_25centavos=isset($_POST['qtde25Centavos'])?$_POST['qtde25Centavos']:0; 
$totalMoeda25cent=$qtde_25centavos*0.25;



$qtde_50centavos=isset($_POST['qtde50Centavos'])?$_POST['qtde50Centavos']:0;
$totalMoeda50cent=$qtde_50centavos*0.50;

$qtde_1real=isset($_POST['qtde_1real'])?$_POST['qtde_1real']:0;
$totalMoeda1real=$qtde_1real*1.00;

$valor_total=$totalMoeda1cent+$totalMoeda5cent+$totalMoeda10cent+$totalMoeda25cent+$totalMoeda50cent+$totalMoeda1real;

echo "Total de Moedas de 1 centavo $qtde_1centavo = Total R$".number_format($totalMoeda1cent,2)."<br>";
echo "Total de Moedas de 5 centavos $qtde_5centavos =Total R$".number_format($totalMoeda5cent,2)."<br>" ; 
echo "Total de Moedas de 10 centavos $qtde_10centavos =Total R$".number_format($totalMoeda10cent,2)."<br>"; 
echo "Total de Moedas de 25 centavos $qtde_25centavos =Total R$".number_format($totalMoeda25cent ,2)."<br>"; 
echo "Total de Moedas de 50 Centavos $qtde_50centavos= Total R$".number_format($totalMoeda50cent,2)."<br>";
echo "Total de Moedas de 1 Real $qtde_1real= Total R$".number_format($totalMoeda1real,2)."<br>";
echo "Valor Total R$ ".number_format($valor_total,2);

?>

