<?php
include("conexao.php");
$conexao = novaconexao();
#ini_set("display_errors",1);
if($_GET['codigo']){
    $sql="SELECT*FROM cadastro WHERE idcad=?";
    $stmt=$conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['codigo']);
    if($stmt->execute()){
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
        $erros['nome'] = "digite seu nome ";
    }
    if (!filter_input(INPUT_POST, 'sobrenome')) {
        $erros['sobrenome'] = "digite seu sobrenome ";
    }

    $nome = $dados['nome'];
    $sobrenome = $dados['sobrenome'];
    $idcad = $dados['idcad'];

    if (count($erros) == 0) {
        $alterar = "UPDATE cadastro SET nome=?, sobrenome=? WHERE idcad=?";
        $stmt = $conexao->prepare($alterar);
        $params = [$nome, $sobrenome,$idcad];
        $stmt->bind_param("ssi",...$params); 
        var_dump($params);
        if($stmt->execute()){
            header("Location:/exercicio.php?dir=lista_exercicios3&file=ex23");
            unset($dados);
            
        }
        
    }
}


?>

<div class="titulo">ALTERAR</div>


<form action="#" method="post">
    <input type="hidden" name="idcad" value="<?=$dados['idcad'] ?>">
    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?> " value="<?=$dados['nome']?>" placeholder="Digite seu e nome "> <br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" name="sobrenome" class="<?= $erros['sobrenome']? 'is-invalid' : '' ?>" value="<?=$dados['sobrenome']?>"placeholder="Digite seu  sobrenome"><br>
    <div class="invalid-feedback">
        <?= $erros['sobrenome'] ?>
    </div>
    <button class="btn btn-primary">enviar</button>
</form>

