<?php
session_start();
include("conexao.php");
ini_set("display_errors", 1);
$conexao = novaconexao();
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$select = "SELECT email,senha,nome FROM usuario WHERE email='$email' and senha='$senha'"; 
$resultado = $conexao->query($select);
$row = mysqli_num_rows($resultado);

var_dump($select);
if ($row == 1) {
    $_SESSION['usuario'] = $email;
    header("Location:index.php");
    exit();
}


if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['senha/usuario invalido'];
}


?>
<!DOCTYPE html>

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

<body class="login">

    <header class="cabecalho">
        <h1>Mega Treino</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['erros']) : ?>
                <div class=erros>
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>

                </div>
            <?php endif ?>
            <form action="#" method="post">
                <input type="email" class="form-control" name="email" placeholder="Digite seu email"> <br>
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha"><br>
                <button class="btn btn-primary">entrar</button> <br>
                <a href="registrar_usuario.php">registrar novo usuario</a>
            </form>
        </div>
    </main>
</body>

<?php include("rodape.php") ?>

</html>