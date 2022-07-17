teste conect  
<?php 
function novaConexao($banco="teste"){
$host="localhost";
$user="mysql"; 
$password="Palmeiras123";

$conexao=mysqli_connect($host,$user,$password,$banco);

 

if($conexao->connect_error){
    die('Erro'.$conexao->connect_error);
}

return $conexao; 

}
