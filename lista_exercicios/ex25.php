<div class="titulo">Exercicio 25</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"> <br>
    <input type="number" name="n2" placeholder="Digite 2° numero"> <br>
    <input type="number" name="n3" placeholder="Digite 3° numero"><br>
    <button class="btn btn-primary">Calcular</button>
</form>
<?php 

$n1=isset($_POST['n1'])?$_POST['n1']:0;
$n2=isset($_POST['n2'])?$_POST['n2']:0;
$n3=isset($_POST['n3'])?$_POST['n3']:0;


?>

<div class="modulo">
    <ul>
    <?php
    for ($i=0; $i <=10 ; $i++) { 
        $r1=$n1*$i;
        echo "$n1 x $i=$r1 <br>"; 
    }
    ?>
    </ul>
</div>

<div class="modulo">
    
    <?php
    for ($x=0; $x <=10 ; $x++) { 
        $r2=$n2*$x;
        echo "$n2 x $x=$r2 <br>"; 
    }
    ?>
    
</div>

<div class="modulo">
    
    <?php
    for ($v=0; $v <=10 ; $v++) { 
        $r2=$n3*$v;
        echo "$n3 x $v=$r2 <br>"; 
    }
    ?>
    
</div>