<?php namespace revisao\gerenciador_erros;   ?>
<div class="titulo">Error Handler</div>

<?php

ini_set('display_errors',1);

// E_Error sera mostrado  somente os erros sem os avisos
error_reporting(E_ERROR);

##echo 4/0; 
// E_All sera exibido tanto erros como avisos
error_reporting(E_ALL);
##echo 8/0; 
// nesse caso eu estou pedindo para não mostrar nada nem erros nem avisos 
error_reporting(~E_ALL);
echo 7/0;
echo "<hr>";
error_reporting(E_ALL);
//echo 4/0;
//include "arquivoInexistente.php";

function FiltrarMensagem($erro,$errstring){
    $text='include';
    return !! strpos(" $errstring",$text);

}

set_error_handler('FiltrarMensagem',E_WARNING);
echo"<hr>";
include include "arquivoInexistente.php";
// ele restaura o error handler ao estado natural;
restore_error_handler();

?>

