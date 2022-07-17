<div class="titulo">Interface</div>


<?php 

interface Animal{
public function respirar();
}

interface Canino extends Animal{
    public function latir();
}


class Cachorro implements Canino{
    public function respirar()
    {
        return "usando oxigenio <br>";
    }
    
    public function latir()
    {
        return "au au<br>";
    }
 
}

$animal1= new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();
var_dump($animal1 instanceof Animal);

?>