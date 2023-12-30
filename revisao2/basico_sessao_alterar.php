<h1>Alterar Sessão</h1>
<?php 
session_start();
print_r($_SESSION);
?>

<?php

$_SESSION['nome']="jhony Baviera";
?>

<!--para alterar o valor da sesao é a mesma coisa que alterar o valor de um array -->
<p>
    <b>Nome:</b><?=$_SESSION['nome']; ?> <br>
    <b>Email:</b><?=$_SESSION['email']; ?> 
  
</p>



<p>
    <a href="basico_sessao.php" >voltar</a>  
</p>
