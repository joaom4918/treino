<div class="titulo">Exercicio 18</div>
<form action="#" method="post">
    <input type="number" name="qtde_frangos" placeholder="Digite  quantidade de frangos"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php

$chip_id=4.00;
$chip_ali=3.50;
$qtde_frangos=isset($_POST['qtde_frangos'])?$_POST['qtde_frangos']:0;
$total_gasto=($qtde_frangos*$chip_id)+$qtde_frangos*$chip_ali;

echo "Quantidade de frangos $qtde_frangos<br>";
echo "Total Gasto para marcar os frangos $". number_format($total_gasto,2);



?>