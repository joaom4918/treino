<?php
include("conexao.php");
$conexao = novaconexao();
//ini_set('display_errors', 1);

if ($_GET['alterar']) {
    $sql = "SELECT *FROM conversor_temp WHERE idcon=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['alterar']);
    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
        }
    }
}

if (count($_POST) > 0) {
    $erro = [];
    $dados = $_POST;

    if (!filter_input(INPUT_POST, 'celsius')) {
        $erro['celsius'] = "voce não digitou a temperatura em graus celcius";
    }

    $c = $dados['celsius'];
    $f = ($c * 9 / 5) + 32;
    $idcon = $dados['idcon'];

    if (count($erro) == 0) {
        $alterar = "UPDATE conversor_temp SET celsius=?, fahrenheit=? WHERE idcon=?";
        $stmt = $conexao->prepare($alterar);
        $params = [$c, $f, $idcon];
        $stmt->bind_param("iii", ...$params);
        if ($stmt->execute()) {
            header("Location:/exercicio.php?dir=lista_exercicios4&file=ex11");
            unset($dados);
        }
    }
}




if ($_GET['excluir']) {
    $excluir = "DELETE FROM conversor_temp WHERE idcon=?";
    $stmt = $conexao->prepare($excluir);
    $stmt->bind_param("i", $_GET['excluir']);
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
    <input type="hidden" name="idcon" value="<?= $dados['idcon'] ?>">
    <label>Digite temperatura Em Graus Celsius </label> <br>
    <input type="text" name="celsius" class="form-control <?= $erro['celsius'] ? 'is-invalid' : '' ?>"
        value="<?= $dados['celsius'] ?>">
    <div class="invalid-feedback">
        <?= $erro['celsius'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>