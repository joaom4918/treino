<?php
include("conexao.php");
$conexao = novaconexao();
ini_set('display_errors', 1);

if($_GET['codigo']){
    $sql="SELECT*FROM calculadora WHERE idcal=?";
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
    

    if (!filter_input(INPUT_POST,"numero1")) {
        $erros['numero1'] = "voce não digitou o 1° numero";
    }
    if (!filter_input(INPUT_POST, "numero2")) {
        $erros['numero2'] = "voce não digitou o 2° numero";
    }

    $numero1=$dados['numero1'];
    $numero2=$dados['numero2'];
    $resultado=$numero1+$numero2;
    $idcal=$dados['idcal'];

    if (count($erros) == 0){
        
        $alterar="UPDATE calculadora SET numero1=?, numero2=?, resultado=? WHERE idcal=?"; 
        $stmt = $conexao->prepare($alterar);
        $params=[$numero1,$numero2,$resultado,$idcal];
        $stmt->bind_param("iiii",...$params);
        var_dump($params);
        if($stmt->execute()){
            header("Location:/exercicio.php?dir=lista_exercicios3&file=ex24");
            unset($dados);
        }
    }
    
}





?>

<div class="titulo">Exercicio 24 alterar </div>
<form action="#" method="post">

    <input type="hidden" name="idcal" value="<?=$dados['idcal'] ?>">
    <input type="number" name="numero1" class="<?= $erros['numero1'] ? 'is-invalid' : '' ?>" value="<?=$dados['numero1']?> " placeholder="Digite 1° numero"><br>
    <div class="invalid-feedback">
        <?= $erros['numero1'] ?>
    </div>
    <input type="number" name="numero2" class="<?= $erros['numero1'] ? 'is-invalid' : '' ?>" value="<?=$dados['numero2'] ?> " placeholder="Digite 2° numero"><br>
    <div class="invalid-feedback">
        <?= $erros['numero2'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>

