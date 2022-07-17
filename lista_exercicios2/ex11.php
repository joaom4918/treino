<div class="titulo">Exercicio 11</div>
<form action="#" method="post">
    <label>masculino</label>
    <input type="radio" name="sexo" value="m">
    <label>feminino</label>
    <input type="radio" name="sexo" value="f"><br>

    <input type="text" name="altura" placeholder="Digite Sua altura">
    <button class="btn btn-primary">calcular</button>
</form>

<?php 
$altura=isset($_POST['altura'])?$_POST['altura']:0;
$sexo=$_POST['sexo'];
$x=72.7*$altura-58;
$y=62.1*$altura-44.7;
if($sexo=="m"){
    echo "peso ideal Homem $x";
}elseif($sexo=="f"){
    echo "peso ideal mulher $y";
}
?>