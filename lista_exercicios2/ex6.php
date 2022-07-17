<div class="titulo">Exercicio 6</div>

<form action="#" method="post">
    <input type="number" name="lado1" placeholder="Digite lado 1"><br> 
    <input type="number" name="lado2" placeholder="Digite lado 2"><br> 
    <button class="btn btn-primary">calcular</button>
    
</form>

<?php 
$l1=isset($_POST['lado1'])?$_POST['lado1']:0;
$l2=isset($_POST['lado2'])?$_POST['lado2']:0; 
$area=$l1*$l2;
$area_dobro=$l1*$l2*2;
echo "area do quadrado sera $area <br>";
echo "area do quadrado dobrada sera $area_dobro";

?>