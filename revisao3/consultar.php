<div class="titulo">Consultar</div>

<?php
require_once('conexao.php');
$conexao=novaconexao();
$sql="SELECT idest,nome,sigla FROM estado";
$resultado=$conexao->query($sql);
$registros=[];

// verificando se a registros
if($resultado->num_rows >0){
    // fetch assoc vai receber um array associativo
    while($row=$resultado->fetch_assoc()){
        $registros[]=$row;
    }
}elseif($conexao->error){
    echo "Error".$conexao->error;
}


$conexao->close();
?>

<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>Sigla</th>
    </thead>

    <tbody>
      
        <?php foreach($registros as $registro):?>
            <tr>
            <td><?=$registro['idest'] ?></td>
            <td><?=$registro['nome'] ?></td>
            <td><?=$registro['sigla'] ?></td>
            </tr>
        <?php endforeach ?>
     
    </tbody>
</table>