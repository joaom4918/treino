<?php

namespace lista_Exercicios3\ex21; ?>
<div class="titulo">Exercicio 21</div>

<?php

include("revisao3/conexao.php"); 
$conexao=novaconexao();

if(count($_POST)>0){
    $erros=[];
    $dados=$_POST;

    if(!filter_input(INPUT_POST,'nome')){
        $erros['nome']="voce não digitou seu nome";
    }

    if(!filter_input(INPUT_POST,'salario_hora')){
        $erros['salario_hora']="voce não digitou o salario hora";
    }

    if(!filter_input(INPUT_POST,'horas_trabalhadas')){
        $erros['horas_trabalhadas']="voce não digitou as horas trabalhadas";
    }

    $nome=$dados['nome'];
    $horas_trabalhadas=$dados['horas_trabalhadas'];
    $salario_hora=$dados['salario_hora'];
    $salario_bruto=$horas_trabalhadas*$salario_hora;
    $desconto_inss=($salario_bruto*0.11);
    $salario_liquido=($salario_bruto-$desconto_inss);

    if(count($erros)==0){
        $inserir_sql="INSERT INTO funcionario (nome,horas_trabalhadas,salario_hora,salario_bruto,salario_liquido) VALUES (?,?,?,?,?)";
        $stmt=$conexao->prepare($inserir_sql);
        $params=[
            $nome,
            $horas_trabalhadas,
            $salario_hora,
            $salario_bruto,
            $salario_liquido,
        ];
        $stmt->bind_param("sisss",...$params);
        if($stmt->execute()){
            unset($dados);
        }
    }
}
if ($_GET['excluir']) {
    $delete_sql = "DELETE FROM funcionario WHERE idfunc=?";
    $stmt = $conexao->prepare($delete_sql);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

?>
<form action="#" method="post">
    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Digite nome do funcionario"><br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" name="salario_hora" class="<?= $erros['salario_hora'] ? 'is-invalid' : '' ?>" placeholder="Digite o salario hora"><br>
    <div class="invalid-feedback">
        <?= $erros['salario_hora'] ?>
    </div>
    <input type="number" name="horas_trabalhadas" class="<?= $erros['horas_trabalhadas'] ? 'is-invalid' : '' ?>" placeholder="Digite o numero de horas trabalhadas"><br>
    <div class="invalid-feedback">
        <?= $erros['horas_trabalhadas'] ?>
    </div>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php

$registros = [];
$select = "SELECT idfunc,nome,horas_trabalhadas,salario_hora,salario_bruto,salario_liquido FROM funcionario";
$resultado = $conexao->query($select);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "ERROR" . $conexao->error;
}



?>



<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>HORAS TRABALHADAS</th>
        <th>SALARIO HORA</th>
        <th>SALARIO BRUTO</th>
        <th>SALARIO LIQUIDO</th>
        <th>Opções</th>
    </thead>

    <tbody>

        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['idfunc'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['horas_trabalhadas'] ?></td>
                <td><?= $registro['salario_hora'] ?></td>
                <td><?= $registro['salario_bruto'] ?></td>
                <td><?= $registro['salario_liquido'] ?></td>
                <td><a href="/exercicio.php?dir=lista_exercicios3&file=ex21&excluir=<?= $registro['idfunc'] ?>" class="btn btn-danger">excluir</a>

                </td>

            </tr>
        <?php endforeach ?>

    </tbody>
</table>