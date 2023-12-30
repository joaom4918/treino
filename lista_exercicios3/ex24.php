<?php
include("conexao.php");
$conexao = novaconexao();
ini_set('display_errors', 1);
if (count($_POST)>0) {
    $erros = [];
    $dados = $_POST;
    

    if (!filter_input(INPUT_POST, "numero1")) {
        $erros['numero1'] = "voce não digitou o 1° numero";
    }
    if (!filter_input(INPUT_POST, "numero2")) {
        $erros['numero2'] = "voce não digitou o 2° numero";
    }

    $numero1=$dados['numero1'];
    $numero2=$dados['numero2'];
    $resultado=$numero1+$numero2;

    if(count($erros)==0){
        
        $inserir="INSERT INTO calculadora (numero1,numero2,resultado) VALUES(?,?,?)";
        $stmt=$conexao->prepare($inserir);
        $params=[$numero1,$numero2,$resultado];
        $stmt->bind_param("iii",...$params);
        if( $stmt->execute()){
            unset($dados);
        }
       
      
    }
    
}


if($_GET['excluir']){
    $excluir="DELETE FROM calculadora WHERE idcal=?";
    $stmt=$conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
}
$select="SELECT idcal,numero1,numero2,resultado FROM calculadora";
$resultado=$conexao->query($select);
$registros=[];
if($resultado->num_rows>0){

    while($row=$resultado->fetch_assoc()){
        $registros[]=$row;
    }

}

?>

<div class="titulo">Exercicio 24</div>
<form action="#" method="post">

    <input type="number" name="numero1" class="<?= $erros['numero1'] ? 'is-invalid' : '' ?>" placeholder="Digite 1° numero"><br>
    <div class="invalid-feedback">
        <?= $erros['numero1'] ?>
    </div>
    <input type="number" name="numero2" class="<?= $erros['numero1'] ? 'is-invalid' : '' ?>" placeholder="Digite 2° numero"><br>
    <div class="invalid-feedback">
        <?= $erros['numero2'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>

<table class="table table-bodered table-striped">
    <thead>
        <th>id</th>
        <th>numero 1</th>
        <th>numero 2</th>
        <th>resultado</th>
        <th>opçoes</th>
    </thead>

    <tbody>
        
            <?php foreach($registros as $registro): ?>
                <tr>
                    <td><?=$registro['idcal'] ?></td>
                    <td><?=$registro['numero1'] ?></td>
                    <td><?=$registro['numero2'] ?></td>
                    <td><?=$registro['resultado'] ?></td>
                    <td>
                        <a class="btn btn-danger" href="/exercicio.php?dir=lista_exercicios3&file=ex24&excluir=<?=$registro['idcal'] ?>">excluir</a>
                        <a class="btn btn-primary" href="http://localhost:8000/exercicio.php?dir=lista_exercicios3&file=ex24_alterar&codigo=<?=$registro['idcal'] ?>">alterar</a>
                    </td>
                </tr>

            <?php endforeach ?>
        
    </tbody>

</table>