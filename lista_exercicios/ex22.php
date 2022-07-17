<div class="titulo">Exercicio 22</div>

<form action="#" method="post">
    <input type="text" name="s_usuario" placeholder="Digite a altura da sua sombra"><br>
    <input type="text" name="s_predio" placeholder="Digite a altura da sombra do predio"><br>
    <input type="text" name="alt_usuario" placeholder="Digite a altura do usuario"><br>
    <button class="btn-primary">calcular</button>
</form>

<?php 
$su=isset($_POST['s_usuario'])?$_POST['s_usuario']:0;
$sp=isset($_POST['s_predio'])?$_POST['s_predio']:0;
$au=isset($_POST['alt_usuario'])?$_POST['alt_usuario']:0;

$sr=$sp/$su;
$ap=$sr*$au;

echo "a altura do predio é de $ap";


?>