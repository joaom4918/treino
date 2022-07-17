<div class="titulo">Exercicio 20</div>
<form action="#" method="post">

    <select name="opcao">
        <option>Selecione qual turno voce estuda</option>
        <option value="1">Matutino</option>
        <option value="2">Vespertino</option>
        <option value="3">Noturno</option>
    </select><br>
    <button class="btn btn-primary">enviar</button>
</form>

<?php

$op = $_POST['opcao'];

switch ($op) {
    case '1':
        echo "Bom dia";
        break;
    case '2':
        echo "Boa Tarde";

        break;
    case '3':
        echo "Boa Noite";
        break;
    default:
    echo "opção invalida";
      
}
?>