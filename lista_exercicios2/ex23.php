<div class="titulo">Exercicio 22</div>
<form action="#" method="post">
   
    <select name="mes">
        <option>selecione um mes</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <button class="btn btn-primary">mostrar mes</button> 
</form>

<?php
$mes = $_POST['mes'];

switch ($mes) {
    case '1':
        echo "janeiro";
        break;
    case '2':
        echo "fevereiro";
        break;
    case '3':
        echo "março";
        break;
    case '4':
        echo "abril";
        break;
    case '5':
        echo "maio";
        break;
    case '6':
        echo "junho";
        break;
    case '7':
        echo "julho";
        break;
    case '8':
        echo "agosto";
        break;
    case '9':
        echo "setembro";
        break;
    case '10':
        echo "outubro";
        break;
    case '11':
        echo "novenbro";
        break;
    case '12':
        echo "dezembro";
        break;
    default:
            echo "escolha um mes";
        break;
}

?>