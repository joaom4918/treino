<?php

include("conexao.php");
$conexao=novaconexao();
ini_set('display_errors', 1);

if($_GET['codigo']){
    $sql="SELECT*FROM calculadora WHERE idcal=?";
    $stmt=$conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['codigo']);
    if($stmt->execute()){
        $resultado=$stmt->get_result();

        if($resultado->num_rows>0){
            $dados = $resultado->fetch_assoc();
        }
    }

}
if(count($_POST)>0){
$erro=[];
$dados=$_POST;

if(!filter_input(INPUT_POST,'n1')){
$erro['n1']="voce não digitou o numero solicitado";
}

if(!filter_input(INPUT_POST,'n2')){
    $erro['n2']="voce não digitou o numero solicitado";
}

$n1=$dados['n1'];
$n2=$dados['n2'];
$resultado=$n1+$n2;
$idcal=$dados['idcal']; 

if(count($erro)==0){
    $alterar = "UPDATE calculadora SET n1=?, n2=?,resultado=? WHERE idcal=?";
    $stmt = $conexao->prepare($alterar);
    $params=[$n1,$n2,$resultado,$idcal];
    $stmt->bind_param("iiii",...$params);
    if($stmt->execute()){
        header("Location:/exercicio.php?dir=lista_exercicios4&file=ex10");  
        unset($dados);
    } 

}

}

$select="SELECT n1,n2,resultado,idcal FROM calculadora"; 
$resultado=$conexao->query($select);
$registros=[];

if($resultado->num_rows>0){
    while($row=$resultado->fetch_assoc()){

        $registros[]=$row;
    }
}






?>

<div class="titulo">Exercicio 10</div>
<form action="#" method="post">

<input type="hidden" name="idcal" value="<?=$dados['idcal'] ?>">
 
<input type="number" class="form-control <?=$erro['n1']?'is-invalid':'' ?>" name="n1" value="<?= $dados['n1'] ?>" placeholder="digite 1° numero">
<div class="invalid-feedback">
<?= $erro['n1'] ?>
</div> <br>
<input type="number" class="form-control <?=$erro['n2']?'is-invalid':'' ?>" name="n2" value="<?=$dados['n2'] ?>"placeholder="digite 2° um numero">
<div class="invalid-feedback">
    <?=$erro['n2'] ?>
</div>
<button class="btn btn-primary">calcular</button>

</form>




