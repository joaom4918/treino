<div class="titulo">Exercicio 13</div>
<form action="#" method="post">
<input type="text" name="nome" placeholder="Digite seu nome"><br>
<input type="text" name="salario_hora" placeholder="Digite Salario Hora"><br>
<input type="number" name="horas_trabalhadas" placeholder="Digite numero de horas trabalhadas"><br>
<button class="btn btn-success">Calcular Salario</button>

</form>

<?php 
$sh=isset($_POST['salario_hora'])?$_POST['salario_hora']:0;
$ht=isset($_POST['horas_trabalhadas'])?$_POST['horas_trabalhadas']:0;
$nome=isset($_POST['nome'])?$_POST['nome']:"Desconhecido";
$salario_bruto=$sh*$ht;

$ir=$salario_bruto*0.11;
$x=$salario_bruto-$ir;

$inss=$salario_bruto*0.08;
$y=$salario_bruto-$inss;

$sindicato=$salario_bruto*0.05;
$j=$salario_bruto-$sindicato;

$salario_liquido=$salario_bruto-$ir-$inss-$sindicato;

echo"<h2>Relatorio de Pagamento</h2><br>";
echo "Funcionario $nome<br>";
echo "Horas Trabalhadas $ht<br>";
echo "Salario Bruto $salario_bruto<br>";
echo"Desconto 11% Imposto De Renda $ir <br>";
echo "Desconto 8% INSS $inss <br>";
echo "Sindicato 5% $sindicato <br>";
echo "Salario Liquido $salario_liquido"; 

?>