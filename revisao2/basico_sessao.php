<?php  namespace revisao2\basico_sessao;
 
use Error;

 ?>
<div class="titulo">Sessão</div>

<?php  
ini_set('display_errors',1);
error_reporting(E_ALL); 

session_start();
print_r($_SESSION);
## si a chave nome não existir dentro da sesão $_SESSION vai receber automaticamente o nome joao
if(!$_SESSION['nome']){
$_SESSION['nome']="Jhony";
}

if(!$_SESSION['email']){
    $_SESSION['email']="joao@gmail.com";
}


?>

<p>
    <a href="/revisao2/basico_sessao_alterar.php">Alterar Sessão</a> 
</p>

<p>
    <a href="basico_sessao_limpar.php" >Limpar Sessão</a>  
</p>