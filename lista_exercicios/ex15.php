<div class="titulo">Exercicio 15</div>

<form action="#" method="post">
    <input type="number" name="qtde_sanduba" placeholder="Digite quantidade de sanduiche"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$san=isset($_POST['qtde_sanduba'])?$_POST['qtde_sanduba']:0;
$queijo=50;
$presunto=100;
$hamburguer=100;

$sanduba=$queijo*2+$presunto+$hamburguer; 

$kilos_q=$queijo/1000;
$kilos_p=$presunto/1000;
$kilos_h=$hamburguer/1000;

echo "<h2>Lista de compras</h2><br>";

echo  $san*$kilos_q.  " Kg Queijo"."<br>";
echo  $san*$kilos_p . " Kg Presunto"."<br>";
echo  $san*$kilos_h . " Kg Hamburguer"."<br>";
 
?>