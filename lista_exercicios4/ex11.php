<?php
include("conexao.php");
$conexao=novaconexao();
//ini_set('display_errors', 1); 

if (count($_POST) > 0) {
    $erro = [];
    $dados=$_POST;

    if (!filter_input(INPUT_POST, 'celsius')) {
        $erro['celsius'] = "voce não digitou a temperatura em graus celcius";
    }
}

$c = $_POST['celsius'];
$f = ($c * 9 / 5) + 32;


if (count($erro) == 0) {
    $inserir = "INSERT INTO conversor_temp (celsius,fahrenheit) VALUES (?,?)";
    $stmt = $conexao->prepare($inserir);
    $params = [$c, $f];
    $stmt->bind_param("ii", ...$params);
    if ($stmt->execute()) {
        unset($dados);
    }
}


if($_GET['excluir']){
    $excluir="DELETE FROM conversor_temp WHERE idcon=?";
    $stmt= $conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute(); 
} 

$select = "SELECT idcon,celsius,fahrenheit FROM conversor_temp";
$resultado = $conexao->query($select);
$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
}


?>

<div class="titulo">Exercicio 11</div>

<form action="#" method="post">
    <label>Digite temperatura Em Graus Celsius </label> <br>
    <input type="text" name="celsius" class="form-control <?= $erro['celsius'] ? 'is-invalid' : '' ?>">
    <div class="invalid-feedback">
        <?= $erro['celsius'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>



<table class="table table-striped table-bodered">

    <thead>
        <th>ID</th>
        <th>Graus Celsius</th>
        <th>Graus Fahrenheit</th>
        <th>Opções</th>
    </thead>

    <tbody>
        <?php foreach ($registros as $registro): ?>

            <tr>
                <td><?= $registro['idcon'] ?></td>
                <td><?= $registro['celsius'] ?></td>
                <td><?= $registro['fahrenheit'] ?></td> 
                <td><a href="/exercicio.php?dir=lista_exercicios4&file=ex11&excluir=<?= $registro['idcon'] ?>" class="btn btn-danger">excluir</a>
                <a href="/exercicio.php?dir=lista_exercicios4&file=ex11_alterar&alterar=<?= $registro['idcon'] ?>" class="btn btn-primary">alterar</a> 
            </td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>