<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <title>Document</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Mega treino</h1>
    </header>
    <nav class="navegacao">
    <span class="usuario">Usuario:<?= $_SESSION['usuario'] ?> </span> 
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"?> class="btn btn-success">Sem Formatação</a>
    <a href="index.php" class="btn btn-primary">Voltar</a>
    <a href="logout.php" class="btn btn-danger">Sair</a> 
    </nav>
    <div class="principal">
        <div class="conteudo">

            <?php include("{$_GET['dir']}/{$_GET['file']}.php") ?>

        </div>
    </div>


</body>
<?php include("rodape.php") ?> 
</html>