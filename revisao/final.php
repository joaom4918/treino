<div class="titulo">Final</div>

<?php

use Abstrata as GlobalAbstrata;

abstract class Abstrata{
    abstract public function metodo1();
    public final function metodo2(){
        echo "não vou mudar <br>";
    }
   
}

class Classe extends Abstrata{

        public function metodo1(){
            echo "executando metedo 1";
        }

        

}
?>