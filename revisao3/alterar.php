<?php


include("conexao.php");
$conexao = novaconexao();

if ($_GET['codigo']) {
    $sql = "SELECT*FROM estado WHERE idest=?";
    $stmt=$conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['codigo']);
    if($stmt->execute()) {
        $resultado=$stmt->get_result();
        if($resultado->num_rows>0){
            $dados = $resultado->fetch_assoc();
        }
    }
}

if (count($_POST) > 0) {
    $erros = [];
    $dados = $_POST;
    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "voce não digitou o estado";
    }

    if (!filter_input(INPUT_POST, 'sigla')) {
        $erros['sigla'] = "voce não digitou a sigla";
    }

    if (count($erros) == 0) {

        $sql = "UPDATE  estado  SET nome= ?, sigla= ? WHERE idest=?";
        $stmt = $conexao->prepare($sql);
        $params = [
            $dados['nome'],
            $dados['sigla'],
            $dados['idest'],
        ];

        $stmt->bind_param("ssi", ...$params);
        if ($stmt->execute()) {
            unset($dados);
        }
    }
}


if ($_GET['excluir']) {
    $excluir_sql = "DELETE FROM estado WHERE idest=?";
    $stmt = $conexao->prepare($excluir_sql);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}
$registros = [];
$consultar_sql = "SELECT idest,nome,sigla FROM estado";
$resultado = $conexao->query($consultar_sql);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "ERROR" . $conexao->error;
}




?>


<div class="titulo">alterar</div>

<form action="/exercicio.php" method="get">
    <input type="hidden" name="dir" value="revisao3">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10" ">
            <input type=" number" name="codigo" class="form-control" value="<?= $_GET['codigo'] ?>" placeholder="informe o codigo para consulta">
            <button class="btn btn-primary">consultar</button>
        </div>
    </div>
</form>
<form action="#" method="post">
    <input type="hidden" name="idest" value="<?= $dados['idest'] ?>">
    <input type="text" value="<?= isset($dados['nome']) ? $dados['nome'] : '' ?>" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Digite nome do estado"><br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" value="<?= isset($dados['sigla']) ? $dados['sigla'] : '' ?>" name="sigla" class="<?= $erros['sigla'] ? 'is-invalid' : '' ?>" placeholder="Digite Sigla do estado"><br>
    <div class="invalid-feedback">
        <?= $erros['sigla'] ?>
    </div>

    <button class="btn btn-primary">Enviar</button>
</form>

<br>
<table class="table table-hover table-striped table-bordered">
    <thead class="table-dark">
        <th>ID</th>
        <th>NOME</th>
        <th>SIGLA</th>
        <th>OPÇÕES</th>
    </thead>

    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['idest'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['sigla'] ?></td>
                <td><a href="/exercicio.php?dir=revisao3&file=alterar&excluir=<?= $registro['idest'] ?>" class="btn btn-danger">excluir</a>

                </td>

            </tr>
        <?php endforeach ?>

    </tbody>
</table>