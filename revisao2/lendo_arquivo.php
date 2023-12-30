<div class="titulo">Lendo Arquivo</div>
<?php
// letra r é o modo de leitura
$arquivo=fopen('teste.txt','r');
echo fread($arquivo,10);
echo fread($arquivo,10);
fclose($arquivo);
echo "<hr>"; 

$arquivo=fopen('teste.txt','r');
// a função filesize dara o tamanho do arquivo
echo fread($arquivo,filesize('teste.txt'))."<br>";
fclose($arquivo);
$arquivo=fopen('teste.txt','r');
/* a função fgets vai ler a primeira linha do arquivo se for chamado de novo ele vai ler a segunda linha
e assim respectivamente */
echo fgets($arquivo)."<br>";
echo fgets($arquivo)."<br>";

echo "<hr>";
$arquivo=fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgets($arquivo)."<br>";
}
fclose($arquivo);

# função fgetc lera caractere por caractere
$arquivo=fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgetc($arquivo)."<br>";
}
fclose($arquivo);
echo "<hr>";
$arquivo=fopen('teste.txt','r+');
echo fgets($arquivo);
echo fgets($arquivo);
fwrite($arquivo,"\n conteudo adicionado durante a leitura");
fclose($arquivo);
?>
