<?php namespace revisao2\datas01;

use DateTime;

 ?>
<div class="titulo">Datas 01 </div>
<?php
// o time mostra quantos segundos se passaram do marco zera 01/01/1970 tambem é levado em consideração o fuso horario
setlocale(LC_TIME,'pt-br');    
##echo time()."<br>"; 
echo date('D,d\d\e M \d\e Y')."<br>";
echo strftime('%A %d de %B de %Y',time())."<br>";

$amanha=time()+(24*60*60);
echo date('D,d\d\e M \d\e Y',$amanha)."<br>";

$amanha2=strtotime('+1 day');
echo strftime('%A %d de %B de %Y',$amanha2)."<br>";

$datafix=mktime(15,30,50,1,25,1975);
echo strftime('%A %d de %B de %Y',$datafix)."<br>";

?>
