<div class="titulo">Classe Abestrata</div>

<?php

## toda classe abstrata não pode ser instanciada só pode servir como progenitora
abstract class Abstrata{
        //todo metodo abstrato não tem corpo por isso não tem chaves
    public abstract function metodo1();
    protected abstract function metodo2($parametro); 

}

## em algum momento a classe abstrata vai ser herdada se não não tem pra que ela existir inclusive pode ser
 ##herdada por outra classe abstrata

abstract class FilhaAbstrata extends Abstrata{
 public  function metodo1(){
    echo "Executando metodo 1 <br>";
 }

 public  function metodo2($d){
    echo "Executando metodo 2 <br>";
 }

 public abstract function metodo3();

}

 // quando uma classe herda de uma classe abstrata eu sou obrigado a usar todos os metodos abstratos da classe pai

 class Concreta extends FilhaAbstrata{
    public function metodo3(){
        echo "executando metodo 3";
    }

    public function metodo1(){
        parent::metodo1();
    }
 }


 $x=new Concreta();
 $x->metodo1();
 Concreta::metodo3();
 