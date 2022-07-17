<div class="titulo">Exercicio 7</div>

<form action="#" method="post">
    <input type="number" name="dia" min="1" max="30"><br>
    <select name="mes">
        <option value="1">janeiro</option>
        <option value="2">Fevereiro</option>
        <option value="3">Março</option>
        <option value="4">Abril</option>
        <option value="5">Maio</option>
        <option value="6">Junho</option>
        <option value="7">Julho</option>
        <option value="8">Agosto</option>
        <option value="9">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Janeiro</option>
        <option value="12">Dezembro</option>
    </select>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$dia = isset($_POST['dia']) ? $_POST['dia'] : 0;
$mes = $_POST['mes'];


switch ($mes) {
    case '1':
        if ($dia <= 30) {
            echo "ja se passaram $dia dias do começo do ano";
        }

        break;

    case '2':
        if ($dia <= 28) {
            echo "ja se passaram 1 mes e $dia dias do começo do ano";
        } elseif ($dia > 28) {
            echo "data inexistente";
        }

        break;
    case '3':
        if ($dia <= 30) {
            echo "ja se passaram 2 meses e $dia dias do começo do ano";
        }

        break;
    case '4':
        if ($dia <= 30) {
            echo "ja se passaram 3 meses e $dia dias do começo do ano";
        }

        break;
    case '5':
        if ($dia <= 30) {
            echo "ja se passaram 4 meses e $dia dias do começo do ano";
        }

        break;
    case '6':
        if ($dia <= 30) {
            echo "ja se passaram 5 meses e $dia dias do começo do ano";
        }

        break;
    case '7':
        if ($dia <= 30) {
            echo "ja se passaram 6 meses e $dia dias do começo do ano";
        }

        break;
    case '8':
        if ($dia <= 30) {
            echo "ja se passaram 7 meses e $dia dias do começo do ano";
        }

        break;
    case '9':
        if ($dia <= 30) {
            echo "ja se passaram 8 meses e $dia dias do começo do ano";
        }

        break;
    case '10':
        if ($dia <= 30) {
            echo "ja se passaram 9 meses e $dia dias do começo do ano";
        }

        break;
    case '11':
        if ($dia <= 30) {
            echo "ja se passaram 10 meses e $dia dias do começo do ano";
        }

        break;
    case '12':
        if ($dia <= 30) {
            echo "ja se passaram 11 meses e $dia dias do começo do ano";
        }

        break;
}


?>