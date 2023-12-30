<div class="titulo">Escrever arquivo</div>

<?php
// arquivo abrindo arquivo no modo escrita por isso é passado a letra w
$arquivo=fopen('teste.txt','w');
// fwrite serve como o proprio nome ja diz serve para escrever no arquivo
fwrite($arquivo,"Valor inicial\n");
$str="Segunda Linha";
fwrite($arquivo,$str);
fclose($arquivo);

// se eu fechar e abrir o arquivo de novo ele ira sobrescrever o conteudo antidgo
$arquivo = fopen('teste.txt','w');
fwrite($arquivo,"novo conteudo\n"); 
fclose($arquivo);

// no modo apendi ele não ira sobrescrever o arquivo e sim sobrescrever 
$arquivo=fopen('teste.txt','a');
fwrite($arquivo,"com novos arquivos\n adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors',1);
// x serve para referenciar um arquivo inesxistente
$arquivo=fopen('teste2.txt','x');
fwrite($arquivo,"arquivo novo");
fclose($arquivo);




?>