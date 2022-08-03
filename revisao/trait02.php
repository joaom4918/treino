<div class="titulo">trait 02</div>

<?php

trait Validar
{
    public function validarString($str)
    {
        return isset($str) & $str==!'';
    }

}

trait ValidarMelhor{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}
// para evitar conflitos de funçoes com o mesmo nome dentro de diferentes traints usase o instedof
class User{
    use ValidarMelhor,Validar{
        ValidarMelhor::validarString insteadof Validar;
        Validar::validarString as validarSimples;
    }
}

$usuario= new User();
var_dump($usuario->validarString(' '));
echo "<br>";
var_dump($usuario->validarSimples(' '));
?>