<div class="titulo">Try Catch</div>

<?php

try{
echo intdiv(7,0);
}catch(Error $e){
    echo "teve um erro aqui<br>";

}

 
/* é recomendado colocar as exeções mais genericas antes e as mais especificas depois pq se colocar 
as mais genericas antes sempre vai car na exeção mais generica
*/
try{
    // lançando a exeção
    throw new Exception('ocorreu um erro muito estranho ');
}catch(DivisionByZeroError $e){
    echo "Divisão por zero";
}catch(Throwable $e){
    echo "Erro encontrado: ".$e->getMessage()."<br>";
}finally{
    echo "Sempre Executado";
}

echo "Execução continua";
?>