<?php namespace lista_Exercicios3\ex16; ?>
<div class="titulo">Exercicio 16</div>

<?php

$arquivo=fopen('C:\Users\ASUS\Desktop\anotações\anotaçoes ingles.txt','r');
echo fread($arquivo,filesize('C:\Users\ASUS\Desktop\anotações\anotaçoes ingles.txt'));

echo "<hr>";
echo "Lendo arquivo bit a bit<br>";
$arquivo=fopen('teste.txt','r');
// lendo somenda 10 bits
echo fread($arquivo,10); 
echo "<hr>";
// lendo linha a linha do arquivo com fgets 
$arquivo=fopen('C:\Users\ASUS\Desktop\anotações\anotaçoes ingles.txt','r');
echo fgets($arquivo);
?>