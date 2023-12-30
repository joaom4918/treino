<?php

include("conexao.php");
$conexao=novaconexao();
//ini_set('display_errors', 1);
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

if(count($erro)==0){
    $inserir = "INSERT INTO calculadora (n1, n2, resultado) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($inserir);
    $params=[$n1,$n2,$resultado];
    $stmt->bind_param("iii",...$params);
    if($stmt->execute()){
        unset($dados);  
    }

}


}

if($_GET['excluir']){
    $delete="DELETE FROM calculadora WHERE idcal=?";
    $stmt=$conexao->prepare($delete);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
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
 
<input type="number" class="form-control <?=$erro['n1']?'is-invalid':'' ?>" name="n1" placeholder="digite 1° numero">
<div class="invalid-feedback">
<?= $erro['n1'] ?>
</div> <br>
<input type="number" class="form-control <?=$erro['n2']?'is-invalid':'' ?>" name="n2" placeholder="digite 2° um numero">
<div class="invalid-feedback">
    <?=$erro['n2'] ?>
</div>
<button class="btn btn-primary">calcular</button>

</form>


<table class="table">
 <thead>
    <th>ID</th>
    <th>1° Numero </th>
    <th>2° Numero </th>
    <th>Resultado</th> 
    <th>Opções</th>
 </thead>

<tbody>
    <?php foreach($registros as $registro): ?>
        <tr>
            <td><?=$registro['idcal'] ?></td>
            <td><?=$registro ['n1'] ?></td>
            <td><?=$registro['n2'] ?></td>
            <td><?=$registro['resultado'] ?></td> 
            <td><a href="http://localhost:8000/exercicio.php?dir=lista_exercicios4&file=ex10&excluir=<?=$registro['idcal'] ?>" class="btn btn-danger">excluir</a>
            <a href="http://localhost:8000/exercicio.php?dir=lista_exercicios4&file=ex10_alterar&codigo=<?=$registro['idcal'] ?>" class="btn btn-primary">alterar</a>
        </td>
            
        </tr>
    <?php endforeach ?>
</tbody>

</table>

