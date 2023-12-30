<?php
ini_set('display_errors',1);

    if(count($_POST)>0){
        $erros = [];
        $dados=$_POST;
        include("conexao.php");
        $conexao = novaconexao();
    
        if (!filter_input(INPUT_POST, 'nome')) {
            $erros['nome'] = "voce não digitou o estado";
        }
    
        if (!filter_input(INPUT_POST, 'sigla')) {
            $erros['sigla'] = "voce não digitou a sigla";
        }

        if(count($erros)==0){
            $sql="INSERT INTO estado (nome,sigla) VALUES (?,?)";
            $stmt=$conexao->prepare($sql);
            $params=[
                $dados['nome'],
                $dados['sigla']
            ];
            $stmt->bind_param("ss",...$params);
            if($stmt->execute()){
                unset($dados);
            }
        }
    }


  




?>





<div class="titulo">Inserir 2</div>

<form action="#" method="post">

    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" value="<?=$dados['nome'] ?>" placeholder="Digite nome do estado"><br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="text" name="sigla" class="<?= $erros['sigla'] ? 'is-invalid' : '' ?>" value="<?=$dados['sigla'] ?>"  placeholder="Digite Sigla do estado"><br>
    <div class="invalid-feedback">
        <?= $erros['sigla'] ?>
    </div>

    <button class="btn btn-primary">Enviar</button>
</form>