<div class="titulo">Traint</div>

<?php
trait Validar{
    private $a="Valor A";
    private $nome;
    public function validarString($str){
            return isset($str) && $str !=='';
    }
}

trait ValidarMelhor{
    private $b="Valor B";
    public function validarStringMelhor($str){
        ## o trim ira remover todos os espaços em brnaco da string
        return isset($str)  && trim($str);
    }
}


trait ValidarIdade{
private $ano_atual;
private $ano_nas;

public function CalcularIdade($ano_atual,$ano_nas){
    $this->ano_atual=$ano_atual;
    $this->ano_nas=$ano_nas;

    $idade=$this->ano_atual-$this->ano_nas;
    return  "idade $idade";
}
}



class User{
    ## automaticamente todas as funçoes das traits estarao disponiveis para uso
    use Validar,ValidarMelhor,ValidarIdade;
}

$usuario = new User();
$usuario->validarStringMelhor('sjkjsa');
var_dump($usuario->validarString(' ')); 
echo $usuario->CalcularIdade(2022,2000); 
var_dump($usuario);
?>