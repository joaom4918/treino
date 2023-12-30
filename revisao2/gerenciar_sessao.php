<div class="titulo">Gerenciar Sessao</div>

<?php
session_start();
echo session_id()."<br>";



$contador=&$_SESSION['contador'];
$contador=$contador?$contador+1:1; 
echo $_SESSION['contador']; 

if($_SESSION['contador']%5==0){
    session_regenerate_id();
}
if($_SESSION['contador'] >= 5){

    session_destroy();
}
?>  