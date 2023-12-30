<?php

include("conexao.php");
$conexao = novaconexao();
ini_set('display_errors', 1);

if (count($_POST) > 0) {
    $erros = [];
    $dados = $_POST;

    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "digite seu nome ";
    }
    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['sobrenome'] = "digite seu sobrenome ";
    }

    $nome = $dados['nome'];
    $sobrenome = $dados['sobrenome'];

    if (count($erros) == 0) {
        $insert = "INSERT INTO cadastro (nome,sobrenome) VALUES (?,?)";
        $stmt = $conexao->prepare($insert);
        $params = [$nome, $sobrenome];

        $stmt->bind_param("ss", ...$params);
        $stmt->execute();
    }
}

if($_GET['excluir']){
    $excluir="DELETE FROM cadastro WHERE idcad=?";
    $stmt=$conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
}


$select = "SELECT idcad,nome,sobrenome FROM cadastro";
$resultado = $conexao->query($select);
$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
}


?>
<div class="titulo">Exercicio 23</div>

<form action="#" method="post">

    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Digite seu e nome "> <br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" name="sobrenome" class="<?= $erros['sobrenome'] ? 'is-invalid' : '' ?>" placeholder="Digite seu  sobrenome"><br>
    <div class="invalid-feedback">
        <?= $erros['sobrenome'] ?>
    </div>
    <button class="btn btn-primary">enviar</button>
</form>


<table class="table table-bodered table-striped table-hover ">

    <thead>
        <th>id</th>
        <th>nome</th>
        <th>sobrenome</th>
        <th>opções</th>
    </thead>

    <tbody>
        
            <?php foreach ($registros as $registro) : ?>
        <tr>

            <td><?= $registro['idcad'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= $registro['sobrenome'] ?></td>
            <td><a href="/exercicio.php?dir=lista_exercicios3&file=ex23_alterar&codigo=<?=$registro['idcad'] ?>" class="btn btn-primary">alterar</a>
            <a href="/exercicio.php?dir=lista_exercicios3&file=ex23&excluir=<?=$registro['idcad'] ?>" class="btn btn-danger">excluir</a>

            </td>

           
        
        </tr>
            
    <?php endforeach;  ?>


    </tbody>

    <tbody>

    </tbody>
</table>