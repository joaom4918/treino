<div class="titulo">Exercicio 19</div>

<form action="#" method="post">
    <input type="text"  name="lata" placeholder="Digite quantidade de latas Desejada"><br>
    <input type="text"  name="garrafinha" placeholder="Digite quantidade de garrafas de 600ml desejada"><br>
    <input type="text"  name="garrafa" placeholder="Digite quantidade de garrafas de 2 litros desejada"><br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 
$lata=isset($_POST['lata'])?$_POST['lata']:0;
$garra=isset($_POST['garrafinha'])?$_POST['garrafinha']:0;
$garrafa=isset($_POST['garrafa'])?$_POST['garrafa']:0;
//total em ml;
$lataml=250;
$garraml=600;
$garrafa_litro=2;
// convertendo ml em litros 
$lata_total_ml=$lata*$lataml;
$lata_total_litros=$lata_total_ml/1000;

$garra_total_ml=$garra*$garraml;
$garra_total_litros=$garra_total_ml/1000;


$garrafa_total_litros=$garrafa*$garrafa_litro;
$total=$lata_total_litros+$garra_total_litros+$garrafa_total_litros;

if($lata_total_ml<1000){
    echo "Total de latas $lata_total_ml Ml<br>";
}elseif($lata_total_ml>=1000){
    echo  "Total de latas em litro $lata_total_litros L <br>";
}
if($garra_total_ml<1000){
    echo "Total de Garrafas de 600ml 1 <br>";
}elseif($garra_total_ml>=1000){
    echo  "Total de garrafas de 600ml em litro $garra_total_litros L <br>";
}
echo  "Total de garrafas de 2L $garrafa_total_litros L <br>";
echo "TOTAL $total"












?>