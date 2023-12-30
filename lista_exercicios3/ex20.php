<div class="titulo">EXERCICIO 20</div>

<?php

include_once("revisao3/conexao.php");
$conexao = novaconexao();
##ini_set("display_errors", 1);
if ($_GET['codigo']) {
    $sql = "SELECT*FROM boletim WHERE idbol=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['codigo']);
    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
        }
    }
}




/*if (count($erros) == 0) {
    $erros = [];
    $dados = $_POST;

    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "voce não digitou o nome ";
    }

    if (!filter_input(INPUT_POST, 'nota1')) {
        $erros['nota1'] = "voce não digitou a 1° nota";
    }

    if (!filter_input(INPUT_POST, 'nota2')) {
        $erros['nota2'] = "voce não digitou a 2° nota";
    }

    if (!filter_input(INPUT_POST, 'nota3')) {
        $erros['nota3'] = "voce não digitou a 3° nota";
    }


    $sql = "INSERT INTO boletim (nome,nota1,nota2,nota3,media) VALUES (?,?,?,?,?)";
    $stmt = $conexao->prepare($sql);

    $params = [
        $dados['nome'],
        $dados['nota1'],
        $dados['nota2'],
        $dados['nota3'],
        $dados['media'] = ($dados['nota1'] + $dados['nota2'] + $dados['nota3']) / 3,
      


    ];

    $stmt->bind_param("siiii", ...$params);
    if ($stmt->execute()) {
        echo "executado com sucesso";
        unset($dados);
    }
}



*/


if (count($_POST) > 0) {
    $erros = [];
    $dados = $_POST;

    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "voce não digitou o nome ";
    }

    if (!filter_input(INPUT_POST, 'nota1')) {
        $erros['nota1'] = "voce não digitou a 1° nota";
    }

    if (!filter_input(INPUT_POST, 'nota2')) {
        $erros['nota2'] = "voce não digitou a 2° nota";
    }

    if (!filter_input(INPUT_POST, 'nota3')) {
        $erros['nota3'] = "voce não digitou a 3° nota";
    }


    if (count($erros) == 0) {
        $sql = "UPDATE boletim SET nome=?,nota1=?,nota2=?, nota3=?, media=? WHERE idbol=?";
        $stmt = $conexao->prepare($sql);
        $params = [
            $dados['nome'],
            $dados['nota1'],
            $dados['nota2'],
            $dados['nota3'],
            $dados['media'] = ($dados['nota1'] + $dados['nota2'] + $dados['nota3']) / 3,
            $dados['idbol'],
        ];


        $stmt->bind_param("siiiii", ...$params);

        if ($stmt->execute()) {
            unset($dados);
        }
    }
}




    $conexao = novaconexao();
    if ($_GET['excluir']) {
        $excluir_sql = "DELETE FROM boletim WHERE idbol=?";
        $stmt = $conexao->prepare($excluir_sql);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }




$consultar_sql = "SELECT idbol,nome,nota1,nota2,nota3,media FROM boletim";
$resultado = $conexao->query($consultar_sql);
$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "ERROR" . $conexao->error;
}



?>


<form action="#" method="post">
    <input type="hidden" name="idbol" value="<?= $dados['idbol'] ?>">
    <input type="text" name="nome" value="<?= isset($dados['nome']) ? $dados['nome'] : '' ?>" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Digite seu nome"> <br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="number" name="nota1" value="<?= isset($dados['nota1']) ? $dados['nota1'] : '' ?>" class="<?= $erros['nota1'] ? 'is-invalid' : '' ?>" placeholder="Digite 1° nota "> <br>
    <div class="invalid-feedback">
        <?= $erros['nota1'] ?>
    </div>
    <input type="number" name="nota2" value="<?= isset($dados['nota2']) ? $dados['nota2'] : '' ?>" class="<?= $erros['nota2'] ? 'is-invalid' : '' ?>" placeholder="Digite 2° nota "> <br>
    <div class="invalid-feedback">
        <?= $erros['nota2'] ?>
    </div>
    <input type="number" name="nota3" value="<?= isset($dados['nota3']) ? $dados['nota3'] : '' ?>" class="<?= $erros['nota3'] ? 'is-invalid' : '' ?>" placeholder="Digite 3° nota "> <br>
    <div class="invalid-feedback">
        <?= $erros['nota3'] ?>
    </div>
    <button class="btn btn-primary">enviar</button>
</form>


<table class="table table-bordered">

    <thead class="table-dark">
        <th>ID</th>
        <th>NOME</th>
        <th>NOTA 1</th>
        <th>NOTA 2</th>
        <th>NOTA 3</th>
        <th>MEDIA</th>
        <th>OPÇÕES</th>


    </thead>


    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['idbol'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['nota1'] ?></td>
                <td><?= $registro['nota2'] ?></td>
                <td><?= $registro['nota3'] ?></td>
                <td><?= $registro['media'] ?></td>
             
                <td><a href="/exercicio.php?dir=lista_exercicios3&file=ex20&excluir=<?= $registro['idbol'] ?>" class="btn btn-dark">excluir</a>
                    <a href="/exercicio.php?dir=lista_exercicios3&file=ex20&codigo=<?= $registro['idbol'] ?>" class="btn btn-primary">alterar</a>

            </tr>
            </td>

        <?php endforeach ?>

    </tbody>
</table>