<div class="titulo">Exercicio 13</div>
<img src="https://comofazeremcasa.net/wp-content/uploads/2020/06/desenho-de-pizza-para-pintar-e-colorir-10.jpg" width="120" height="120"><br>
<form action="#" method="post">
    
    <input type="number" name="raio" placeholder="digite raio da pizza"> <br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 
$pi=3.14;
$raio=isset($_POST['raio'])?$_POST['raio']:0;
$x=$raio*$raio;
$area=$x*$pi;

echo "a area da pizza é $area";

?>