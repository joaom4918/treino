<!-- >
<div class="titulo">Exercicio 5</div>

<form action="#" method="post">
    <input type="text" name="preco_litro" placeholder="Digite preço do litro da gasolina"><br>
    <input type="text" name="valor" placeholder="Digite a valor a ser pago "><br>
    <button class="btn btn-primary">calcular</button>

</form>

<?php 

$pl=isset($_POST['preco_litro'])?$_POST['preco_litro']:0.0;
$v=isset($_POST['valor'])?$_POST['valor']:0.0;

$tanque=$v/$pl;

echo "voce colocou no tanque $tanque litros  de gasolina";


?>