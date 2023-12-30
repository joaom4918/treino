<?php

include("conexao.php");
$conexao = novaconexao();

ini_set('display_errors', 1);
if ($_POST > 0) {
    $erros = [];
    $dados = $_POST;

    if (!filter_input(INPUT_POST, 'salario_hora')) {
        $erros['salario_hora'] = "você não digitou o salário hora";
    }

    if (!filter_input(INPUT_POST, 'horas_trabalhadas')) {
        $erros['horas_trabalhadas'] = "você não digitou o número de horas trabalhadas";
    }

    $salario_hora = $dados['salario_hora'];
    $horas_trabalhadas = $dados['horas_trabalhadas'];
    $salario_bruto = $salario_hora * $horas_trabalhadas;
    $ir = $salario_bruto * 11 / 100;
    $inss = $salario_bruto * 8 / 100;
    $sindicato = $salario_bruto * 5 / 100;
    $salario_liquido = $salario_bruto - $ir - $inss - $sindicato;

    $inserir = "INSERT INTO pagamento (salario_hora, horas_trabalhadas, salario_liquido) VALUES (?, ?, ?)";

    $stmt = $conexao->prepare($inserir);
    $params = [
        $dados['salario_hora'],
        $dados['horas_trabalhadas'],
        $salario_liquido
    ];

    var_dump($salario_liquido);
    $stmt->bind_param("sis", ...$params);
    $stmt->execute();
}
?>
<div class="titulo">Exercicio 1</div>

<form action="#" method="post">
    <input type="number" class="<?= $erros['salario_hora'] ? 'is-invalid' : '' ?>" name="salario_hora"
           placeholder="Digite salario hora">
    <div class="invalid-feedback">
        <?= $erros['salario_hora'] ?>
    </div>
    <input type="number" class="<?= $erros['horas_trabalhadas'] ? 'is-invalid' : '' ?>" name="horas_trabalhadas"
           placeholder="Digite numero de horas Trabalhadas">

    <div class="invalid-feedback">
        <?= $erros['horas_trabalhadas'] ?>
    </div>

    <button class="btn btn-primary">Calcular</button>
</form>

<?php

echo "Salario Bruto $" . number_format($salario_bruto, 2) . "<br>";
echo "Imposto de Renda 11% $" . number_format($ir, 2) . "<br>";
echo "INSS 8% $" . number_format($inss, 2) . "<br>";
echo "Sindicato $" . number_format($sindicato, 2) . "<br>";
echo "Salario liquido $" . number_format($salario_liquido, 2);

?>
