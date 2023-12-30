<div class="titulo">Imagens</div>


<?php
session_start();

// pegando os arquivos da session se não tiver arquivo na session ele vai instanciar um array vazio
$arquivos = $_SESSION['arquivos'] ?? [];
$pastaUp = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUp . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
// movendo o arquivo temporario
if (move_uploaded_file($tmp, $arquivo)) {
    echo "arquivo valido e  enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br> Erro no Upload do arquivo";
}


?>


<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo"> <br>
    <button class="btn btn-primary">enviar</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
        <th>Imagens</th>
        </tr>
    </thead>

    <tbody>

  
    <tr>
         <?php foreach ($arquivos as $arquivo) : ?>
            <?php if (strpos($arquivo,"jpg")) : ?>
            <td><a href="../files/<?= $arquivo ?>"><img src="../files/<?= $arquivo ?>" width="100" height="100" alt=""></a></td>
            <?php endif ?>
        <?php endforeach ?>
   
    </tr>
    </tbody>
</table>

<ul>
     


</ul>