<?php 

use Exception;

 ?> 

<div class="titulo">Erros Personalizados</div> 
<?php

class FaixaEtariaException extends Exception{
    public function __construct($message, $code=0,$previous=null)
    {
       parent::__construct($message,$code,$previous);
        
    }


}

function calcularTempoAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException('ainda esta muito longe');
    }

    if($idade > 70){
        throw new FaixaEtariaException('ja deveria estar aposentado');

    }
    return  70 - $idade;
}


$idadesAvaliadas=[15,30,60,80];

foreach($idadesAvaliadas as $idade){
    try{
        $tempo_restante=calcularTempoAposentadoria($idade);
        echo "Idade: $idade,$tempo_restante anos restante <br>";
    }catch(FaixaEtariaException $e){
        echo "Não foi posivel Calcular para a $idade anos <br>";
        echo "Motivo ".$e->getMessage();
    }
}
?>