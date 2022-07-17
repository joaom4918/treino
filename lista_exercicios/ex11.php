<div class="titulo">Exercicio 11</div>
<form action="#" method="post">
    <input type="text" name="salario" placeholder="Informe o salario inicial"><br>
    <button class="btn btn-primary">calcular salario</button>
</form>

<?php 

$salario=isset($_POST['salario'])?$_POST['salario']:0;
$aumento=(15/100*$salario)+$salario;
$x=$aumento*0.08;
$desconto=$aumento-$x;


echo "Salario Inicial $".number_format($desconto,2)."<br>";
echo "Salario com aumento de 15% $". number_format($aumento,2)."<br>" ;
echo "Desconto 8% $". number_format($desconto,2)."<br>";
echo "Salario final $".number_format($desconto,2)."<br>";

?>