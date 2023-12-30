<?php 
ini_set("display_errors",1);
$erros=[];
include("revisao3/conexao.php");
$conexao=novaconexao();

if(!filter_input(INPUT_POST,"nome")){
    $erros['nome']="voce não digitou o nome do anime";
}


if(!filter_input(INPUT_POST,"genero")){
    $erros['genero']="voce não digitou o genero do anime";
}

if(!filter_input(INPUT_POST,"imagem")){
    $erros['imagem']="voce não digitou o endereço da imagem";
}

$nome=$_POST['nome'];
$genero=$_POST['genero'];
$imagem=$_POST['imagem'];
if(count($erros)==0){
    $inserir_anime="INSERT INTO anime (nome,genero,imagem) VALUES (?,?,?)";
    $stmt=$conexao->prepare($inserir_anime);
    $params=[$nome,$genero,$imagem];
    $stmt->bind_param("sss",...$params);
    if($stmt->execute()){
        unset($_POST);
    }
}

if($_GET['excluir']){
    $excluir="DELETE FROM anime where idani=?";
    $stmt=$conexao->prepare($excluir);
    $stmt->bind_param("i",$_GET['excluir']);
    $stmt->execute();
    
    
}

$registros=[];
$select="SELECT idani,nome,genero FROM anime";
$resultado=$conexao->query($select);
if($resultado->num_rows>0){
    while($row=$resultado->fetch_assoc()){
        $registros[]=$row;
    }
}elseif($conexao->error){
    echo "ERROR".$conexao->error;
}





?>



<div class="titulo">Exercicio 22</div>
<form action="#" method="post">
<input type="text" name="nome" class="<?=$erros['nome']?'is-invalid':''?>" placeholder="Digite o nome do anime"><br>
<div class="invalid-feedback">
    <?=$erros['nome'] ?>
</div>

<input type="text" name="genero" class="<?=$erros['genero']?'is-invalid':''?>" placeholder="Digite o genero "> <br>
<div class="invalid-feedback">
    <?=$erros['genero'] ?>
</div>

<input type="text" name="imagem" class="<?=$erros['imagem']?'is-invalid':''?>" placeholder="coloque o endereço da imagem"> <br>
<div class="invalid-feedback">
    <?=$erros['imagem'] ?>
</div>


<button class="btn btn-primary">calcular</button>
</form>

<table class="table table-bordered table-striped table-hover">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>GENERO</th>
        
        <th>OPÇÔES</th>
    </thead>

    <tbody>
      
        
        <?php  foreach($registros as $registro): ?>
            <tr>
        <td><?=$registro['idani'] ?></td>
        <td><?=$registro['nome'] ?></td>
        <td><?=$registro['genero'] ?></td>
        
        <td><a class="btn btn-danger" href="/exercicio.php?dir=lista_exercicios3&file=ex22&excluir=<?=$registro['idani']?>">excluir</a></td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>

</table>
