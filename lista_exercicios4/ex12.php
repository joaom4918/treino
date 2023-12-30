<?php

include("conexao.php");
$conexao = novaconexao();
//ini_set("display_errors", 1);

if (count($_POST) > 0) {
    $erro = [];

    if (!filter_input(INPUT_POST, "nome")) {
        $erro['nome'] = "voce não digitou o nome da tarefa";
    }

    if (!filter_input(INPUT_POST, "data_venc")) {
        $erro['data_venc'] = "voce não digitou a data de vencimento";

    }



}

$nome = $_POST['nome'];
$data_venc = $_POST['data_venc'];
$descricao = $_POST['descricao'];
if (count($erro) == 0) {

    $inserir = "INSERT INTO tarefas (nome,data_venc,descricao) VALUES (?,?,?)";
    $stmt = $conexao->prepare($inserir);
    $params = [$nome, $data_venc, $descricao];
    $stmt->bind_param("ssb",...$params);
    $stmt->execute();

    
}

if($_GET['excluir']){
    $excluir="DELETE from tarefas WHERE idtaf=?";
    $stmt=$conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
}


$select="SELECT idtaf,nome,data_venc FROM tarefas";
$resultado=$conexao->query($select);
$registros=[];
if($resultado->num_rows>0){
    while($row=$resultado->fetch_assoc()){
        $registros[]=$row;
    }
}








?>

<div class="titulo">exercicio 12</div>


<form action="#" method="post">

    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control <?= $erro['nome'] ? 'is-invalid' : '' ?>"
        placeholder="Digite nome da tarefa a ser excutada">
    <div class="invalid-feedback">
        <?= $erro['nome'] ?>
    </div><br>
    <label for="data_venc">Data de vencimento</label>
    <input type="date" name="data_venc" class="form-control <?= $erro['data_venc'] ? 'is-invalid' : '' ?>"
        placeholder="Digite da de vencimento">
    <div class="invalid-feedback">
        <?= $erro['data_venc'] ?>
    </div><br>

    <label for="descricao">Descriçao</label><br>
    <textarea name="descricao" cols="30" rows="10"></textarea>

    <button class="btn btn-primary">salvar</button>

</form>

<table class="table table-bodered">

<thead>
    <th>ID</th>
    <th>Nome</th>
    <th>data de vencimento</th>
    <th>Opções</th>
</thead>

<tbody>
    <?php foreach($registros as $registro): ?>
        <tr>

        <td><?=$registro['idtaf'] ?></td>
        <td><?=$registro['nome'] ?></td>
        <td><?=$registro['data_venc'] ?></td> 
        <td> <a href="javascript:void(0);" onclick="confirmarExclusao(<?=$registro['idtaf'] ?>)" class="btn btn-dark"><i class="fas fa-trash-alt"></i></a>
    <!-- Restante do seu código ... -->
        <a href="exercicio.php?dir=lista_exercicios4&file=ex12_alterar&codigo=<?= $registro['idtaf'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
    </td>
        
        

        </tr>
    <?php endforeach ?>
</tbody>
</table>

<script>

    function confirmarExclusao(id){
        var confirmacao =confirm("tem certeza que deseja excluir?");

        if(confirmacao){ 
            window.location.href="exercicio.php?dir=lista_exercicios4&file=ex12&excluir="+id;
        }
    }
</script>





