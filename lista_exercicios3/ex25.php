<div class="titulo">Exercicio 25</div>

<?php

include("conexao.php");
$conexao = novaconexao();
ini_set('display_errors', 1);

if (count($_POST) > 0) {
    $erros = [];
   


    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "voce não digitou seu nome";
    }

    if (!filter_input(INPUT_POST, 'preco')) {
        $erros['preco'] = "voce não digitou o preço do produto";
    }

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
  

    switch ($preco_desconto) {
        case '1':
            $x = $preco * 0.1;
            $preco_desconto = $preco - $x;
            break;
        
        case '2':
            $y = $preco * 0.2;
            $preco_desconto = $preco - $y;
            break;
        case '3':
            $z = $preco * 0.3;
            $preco_desconto = $preco - $z;
            break;
        case '4':
            $p = $preco * 0.4;
            $preco_desconto = $preco - $p;
            break;
    }

    if (count($erros) == 0) {
        $inserir = "INSERT INTO produto(nome,preco,preco_desconto) VALUES (?,?,?)";
        $stmt = $conexao->prepare($inserir);
        $params = [$nome, $preco, $preco_desconto];
        $stmt->bind_param("sss", ...$params);
        if ($stmt->execute()) {
            unset($_POST);
        }
    }

 
}

$select = "SELECT idprod,nome,preco,preco_desconto FROM produto";
$resultado = $conexao->query($select);
$registros = [];
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
}




if($_GET['excluir']){
    $excluir="DELETE FROM produto WHERE idprod=?";
    $stmt=$conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();

}



?>


<form action="#" method="post">

    <input type="text" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" name="nome" placeholder="Digite nome do produto"><br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" class="<?= $erros['preco'] ? 'is-invalid' : '' ?> " name="preco" placeholder="Digite preço do produtos"> <br>
    <div class="invalid-feedback">
        <?= $erros['preco'] ?>
    </div>

    <select name="preco_deconto" id="">

    <option value="1">10%</option>
    <option value="2">20%</option>
    <option value="3">30%</option>
    <option value="4">40%</option>
    </select>
    <br>

    <button class="btn btn-primary">salvar</button>
</form>


<table class="table table-bodered">

    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>PREÇO</th>
        <th>PREÇO COM DESCONTO</th>
        <th>OPÇÕES</th>

    </thead>

    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>

                <td><?= $registro['idprod'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['preco'] ?></td>
                <td><?= $registro['preco_desconto'] ?></td>
                <td><a href="/exercicio.php?dir=lista_exercicios3&file=ex25&excluir=<?=$registro['idprod'] ?>" class="btn btn-danger">excluir</a></td>
          
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>
