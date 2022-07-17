<div class="titulo">Exercicio 9</div>

<form action="#" method="post">
<input type="number" name="p" placeholder="Digite o numero de camisetas pequenas"><br>
<input type="number" name="m" placeholder="Digite o numero de camisetas medias"><br>
<input type="number" name="g" placeholder="Digite o numero de camisetas grandes"><br>
<button class="btn btn-primary">calcular</button>
</form>

<?php
$p=isset($_POST['p'])?$_POST['p']:0;
$m=isset($_POST['m'])?$_POST['m']:0;
$g=isset($_POST['g'])?$_POST['g']:0;

$venda_p=$p*10.00;
$venda_m=$m*12.00;
$venda_g=$g*15.00;
$total=$venda_p+$venda_m+$venda_g;

echo "total de roupas tamanho p $". number_format($venda_p,2)."<br>";
echo "total de roupas tamanho m $". number_format($venda_m,2)."<br>";;
echo "total de roupas tamanho g $". number_format($venda_g,2)."<br>";;
echo "total $". number_format($total,2);
?>