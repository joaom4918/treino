<div class="titulo">Exercicio 1</div>

<form action="#" method="post">
    <input type="number" name="raio" placeholder="Digite raio do circulo"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php 
$raio=isset($_POST['raio'])?$_POST['raio']:0;
$perimetro=2*3.14*$raio;
$area=pow(2,$raio)*3.14;

echo "perimetro do circulo é $perimetro <br>";
echo "area do circulo é $area cm";
?>