<div class="titulo">Exercicio 2</div>
<form action="#" method="post">
    <input type="text" name="n1" placeholder="Digite numero"> <br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 
$n=isset($_POST['n1'])?$_POST['n1']:0;

echo "o numero informado foi $n"; 
?>