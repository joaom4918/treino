<div class="titulo">Exercicio 9</div>

<form action="#" method="post">
    <input type="number" name="n1"  required placeholder="Digite um numero inteiro"> <br>
    <input type="number" name="n2" required placeholder="Digite um numero inteiro"> <br>
    <input type="text" name="n3" required  placeholder="Digite um numero Real"> <br>
    <button class="btn btn-primary">calcular</button>
</form>


<?php
$n1=isset($_POST['n1'])?$_POST['n1']:0;
$n2=isset($_POST['n2'])?$_POST['n2']:0;
$n3=isset($_POST['n3'])?$_POST['n3']:0.0;

//o produto do dobro do primeiro com metade do segundo
$x=($n1*2)+$n2/2;
$y=$n1*3+$n3;
$j=pow(2,$n3);
echo "produto de $n1 X 2 + $n2/2 = $x <br>";
echo "soma do triplo de $n1 + $n3 = $y <br>";
echo "Terceiro $n3 ³ =$j";
 
?>