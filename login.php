

<!DOCTYPE html>
<?php 
session_start();
$email=$_POST['email'];
$password=$_POST['password'];




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Pagina inicial</title>
</head>

<body class="login.php">

    <header class="cabecalho">
        <h1>Mega Treino</h1>
    </header>
    <main class="principal">
    <div class="conteudo">
        <h3>Identifique-se</h3>
       <form action="#" method="post">
           <input type="email" class="form-control" name="email" placeholder="Digite seu email"> <br>
           <input type="password" class="form-control" name="password" placeholder="Digite sua senha"><br>
           <button class="btn btn-primary">entrar</button>
       </form>
        </div>
    </main>
</body>

<?php include("rodape.php") ?> 
</html>