<div class="titulo">Exercicio 26</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"><br>
    <input type="number" name="n2" placeholder="Digite 2° numero"><br>
    <select name="opcao">
        <option value="1">Multiplicação</option>
        <option value="2">Divisão</option>
        <option value="3">Adição</option>
        <option value="4">Subtração</option>
    </select>
    <button class="btn btn-primary">calcular</button>
</form>
<?php
$n1=isset($_POST['n1'])?$_POST['n1']:0;
$n2=isset($_POST['n2'])?$_POST['n2']:0;
$div=$n1/$n2;
$mult=$n1*$n2;
$adicao=$n1+$n2;
$sub=$n1-$n2;
$opcao=$_POST['opcao'];

switch ($opcao) {
    case '1':
        echo "Multiplicação: $n1 X $n2 = $mult <br>";
        break;
    
    case '2':
        echo "Divisão: $n1 ÷ $n2 = $div <br>";
        break;
    case '3':
        echo "Adição: $n1 + $n2 = $adicao <br>";
        break;
    case '4':
        echo "Subtração: $n1 - $n2 = $sub <br>";
        break;
}






?>