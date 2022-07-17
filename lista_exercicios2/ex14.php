<div class="titulo">Exercicio 14</div>

<form action="#" method="post">
    <input type="text" name="letra" placeholder="Digite uma letra"><br>
<button class="btn btn-primary">verificar</button>
</form>

<?php 
$l=isset($_POST['letra'])?$_POST['letra']:"generico";

if(ctype_upper($l)){
    echo "letra digitada foi $l maiuscula";

}elseif(ctype_lower($l)){
    echo "letra digitada foi $l minuscula";
}

?>