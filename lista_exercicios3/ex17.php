<?php  namespace lista_Exercicios3\ex17; ?>


<?php 

print_r($_FILES);



if($_FILES && $_FILES['arquivo']){
    $pastaUpload="C:\Users\ASUS\Desktop\Wallpapers/";
    $nome_arquivo=$_FILES['arquivo']['name'];
    $arquivo=$pastaUpload.$nome_arquivo;
    $tmp=$_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp,$arquivo)){
        echo "<script>alert('sucesso');</script>";
    }else{
        echo "<script>alert('erro ao realizar operação');</script>";
        
    }
}



 
?>
<div class="titulo">Exercicio 17</div>

<form action="#" method="post" enctype="multipart/form-data"> 
    <label for="arquivo">selecione o arquivo</label><br>
    <input type="file" name="arquivo"><br>
    <button class="btn btn-primary">enviar</button>
</form>
