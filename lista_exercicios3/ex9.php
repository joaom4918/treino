<?php

use Exception; 

error_reporting(E_ALL);


?>
<div class="titulo">Exercicio 9</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome "><br>
    <input type="text" name="idade" placeholder="Digite sua idade"><br>
    <button class="btn btn-primary">imprimir</button>
</form>

<?php

$nome=isset($_POST['nome'])?$_POST['nome']:"texto generico";
$idade=isset($_POST['idade'])?$_POST['idade']:0;




try{
if($idade >100){
    throw new Exception('pessoa centenaria ou erro ao informar idade');
}
}catch(Exception $e){
   echo "Possivel erro ". $e->getMessage();
}finally{
    echo "$nome $idade anos";
}



?>