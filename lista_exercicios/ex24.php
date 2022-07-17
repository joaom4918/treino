<div class="titulo">Exercicio 24</div>

<form action="#" method="post">
<input type="text"  name="raio" placeholder="Digite raio do cilindro"><br>
<input type="text"  name="area" placeholder="Digite area do cilindro"><br>
<input type="text"  name="altura" placeholder="Digite altura do cilindro"><br>

<button class="btn btn-primary">calcular</button>
</form>
<?php 
$area=isset($_POST['area'])?$_POST['area']:0;
$altura=isset($_POST['altura'])?$_POST['altura']:0;
$raio=isset($_POST['raio'])?$_POST['raio']:0;
$volume=pow(2,$raio)*$altura*$area;

echo "volume do cilindro $volume cm";
 



?>