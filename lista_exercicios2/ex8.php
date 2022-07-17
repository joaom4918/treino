<div class="titulo">Exercicio 8</div>

<form action="#" method="post">
    <input type="text" name="graus" placeholder="Digite graus "> <br>
    <select name="op"> 
        <option value="1">Trasformar Celcius Para  Farenheit</option>
        <option value="2">Trasformar Farenheit Para Celcius</option>
    </select>
    <br>
    <button class="btn btn-primary">converter</button>
</form>

<?php 

$g=isset($_POST['graus'])?$_POST['graus']:0;
//Traformando celcius em Farenheit
$tcf=($c*9/5)+32;
//Traformando Farenheit em celcius
$tfc=($g-32)*5/9;

$op=$_POST['op'];
switch ($op) {
    case '1':
        echo "$g Celcius= $tcf °F";
        break;
    
    case'2':
        echo "$f Farenheit=$tfc °C";
        break;
}


?>