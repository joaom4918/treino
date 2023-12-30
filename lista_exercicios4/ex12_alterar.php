<?php

include("conexao.php");
$conexao = novaconexao();
ini_set("display_errors", 1);

if ($_GET['codigo']) {
    $select = "SELECT*FROM tarefas WHeRE idtaf=?";
    $stmt = $conexao->prepare($select);
    $stmt->bind_param("i", $_GET['codigo']);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
        }
    }

}

if (count($_POST) > 0) {
    $erro = [];


    if (!filter_input(INPUT_POST, "nome")) {
        $erro['nome'] = "voce não digitou o nome da tarefa";
    }

    if (!filter_input(INPUT_POST, "data_venc")) {
        $erro['data_venc'] = "voce não digitou a data de vencimento";

    }


    $nome = $_POST['nome'];
    $data_venc = $_POST['data_venc'];
    $descricao = $_POST['descricao'];
    $idtaf = $_POST['idtaf']; 
    if (count($erro) == 0) {

        $alterar = "UPDATE tarefas SET nome=?, data_venc=?,descricao=? WHERE idtaf=?";
        $stmt = $conexao->prepare($alterar);
        $params = [$nome, $data_venc, $descricao, $idtaf];
        $stmt->bind_param("ssbi", ...$params);
        if ($stmt->execute()) {
            header("Location:/exercicio.php?dir=lista_exercicios4&file=ex12");
            unset($dados);
        }
    }



}



?>

<div class="titulo">exercicio 12</div>


<form action="#" method="post">


    <input type="hidden" name="idtaf" value="<?= $dados['idtaf'] ?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control <?= $erro['nome'] ? 'is-invalid' : '' ?> "
        placeholder="Digite nome da tarefa a ser excutada" value="<?= $dados['nome'] ?>">
    <div class="invalid-feedback">
        <?= $erro['nome'] ?>
    </div><br>
    <label for="data_venc">Data de vencimento</label>
    <input type="date" name="data_venc" class="form-control <?= $erro['data_venc'] ? 'is-invalid' : '' ?>"
        placeholder="Digite da de vencimento" value="<?= $dados['data_venc'] ?>">
    <div class="invalid-feedback">
        <?= $erro['data_venc'] ?>
    </div><br>

    <label for="descricao">Descriçao</label><br>
    <textarea name="descricao" cols="30" rows="10"></textarea>

    <button class="btn btn-primary">salvar</button>

</form>