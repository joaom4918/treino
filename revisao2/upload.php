
<div class="titulo">Upload</div>


<?php
print_r($_FILES);
## verificando se tem aerquivos dentro de $_FILES para fazer o upload 

if($_FILES && $_FILES['arquivo']){
    $pastaup='C:\Users\ASUS\Desktop\Wallpapers/';
    $nomear_arquivo=$_FILES['arquivo']['name'];
    $arquivo=$pastaup . $nome_arquivo;

    $tmp=$_FILES['arquivo']['tmp_name'];

      ## uma vez que  se tem o arquivo temporario no nesse caminho ele sera movido para o caminho definitivo 
    #atraves do move_uploaded_file ou seja mova o arquivo que foi feito upload
    // se arquivo temporario for movido pro diretorio que eu quero que seja movido  ele retornara a mensagen aquivo enviado com sucesso
    ## se não vai retornar a mensagem 
    if(move_uploaded_file($tmp,$arquivo)){
        echo "sucesso";
    }else{
        echo "erro no upload do arquivo";
    }
}




?>


<form action="#" method="post" enctype="multipart/form-data">
    <label for="arquivo">escolha um arquivo</label><br>
    <input  type="file" name="arquivo"> <br>
    <button class="btn btn-primary">enviar</button>
 
</form>