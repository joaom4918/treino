<div class="titulo">Classe Abestrata</div>

<?php

## toda classe abstrata não pode ser instanciada só pode servir como progenitora
abstract class Abstrata{
        //todo metodo abstrato não tem corpo por isso não tem chaves
    public abstract function metodo1();
    public abstract function metodo2($parametro); 

}

## em algum momento a classe abstrata vai ser herdada se não não tem pra que ela existir inclusive pode ser
 ##herdada por outra classe abstrata


 // quando uma classe herda de uma classe abstrata eu sou obrigado a usar todos os metodos abstratos da classe pai