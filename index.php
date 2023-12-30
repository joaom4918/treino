<!DOCTYPE html>
<?php 
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario']=$_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header("Location:login.php");
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>

    <title>Pagina inicial</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Mega Treino</h1>
    </header>
    <nav class="navegacao">
    <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?> </span> 
 
    <a href="logout.php" class="btn btn-danger">Sair</a> 
    </nav>
    <div class="principal">
        <div class="conteudo">
        
        <?php include("menu.php") ?>
        </div>
    </div>
</body>

<?php include("rodape.php") ?> 
</html>