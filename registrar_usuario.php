<?php


include("conexao.php");  
$conexao=novaconexao();
session_start();
if(count($_POST)>0){
    $erros=[];
    $dados=$_POST;
    
    if(!filter_input(INPUT_POST,'email')){
        $erros['nome']="voce não digitou o nome";
    }
    if(!filter_input(INPUT_POST,'email')){
        $erros['email']="voce não digitou o email";
    }
    if(!filter_input(INPUT_POST,'senha')){
        $erros['senha']="voce não digitou sua senha";
    }


    $nome=$dados['nome']; 
    $email=$dados['email'];
    $senha=$dados['senha'];

    if(count($erros)==0){
        $insert="INSERT INTO  usuario (email,senha,nome) VALUES(?,?,?)";
        $stmt=$conexao->prepare($insert); 
        $params=[$email,$senha,$nome]; 
        $stmt->bind_param("sss",...$params);
        if($stmt->execute()){
            echo "aklskl";
            unset($dados);
        }

    }
    
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
            <h3>Registrar-se</h3>
            <?php if ($_SESSION['erros']) : ?>
                <div class=erros>
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>

                </div>
            <?php endif ?>
            <form action="#" method="post">
        
                <input type="text" class="form-control <?= $erros['nome']?'is-invalid':'' ?>" name="nome" placeholder="Digite seu nome">
                <div class="invalid-feedback">
                    <?=$erros['nome'] ?>
                </div>
                <br> 
                <input type="text" class="form-control <?=$erros['email']?'is-invalid':'' ?>" name="email" placeholder="Digite seu email">
                <div class="invalid-feedback">
                    <?=$erros['email'] ?>
                </div>
                <br> 
                <input type="password" class="form-control<?=$erros['senha']?'is-invalid':'' ?>" name="senha" placeholder="Digite sua senha"><br>
                <div class="invalid-feedback">
                    <?=$erros['senha'] ?>
                </div>
                <br>
                <button class="btn btn-primary">entrar</button> <br>
              
            </form>
        </div>
    </main>
</body>

<?php include("rodape.php") ?>

</html>