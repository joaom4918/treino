<div class="titulo">Exercicio 32</div>



<?php

interface Calculos{
public function calcularAreaTrapezio($b_menor,$b_maior,$altura);
public function calcularAreaQuadrado($lado1,$lado2);
public function calcularAreaLosango($diagonal,$diagona2);

}

class Calcular implements Calculos{
    protected $b_menor;
    protected $b_maior;
    protected $altura;

    protected $lado1;
    protected $lado2;
    
    protected $diagonal;
    protected $diagona2;

    public function  calcularAreaTrapezio($b_menor,$b_maior,$altura){
        $this->b_menor=$b_menor;
        $this->b_maior=$b_maior;
        $this->altura=$altura;

        $area= ($this->b_maior+$this->b_menor)*$altura/2;
        echo "area do trapezio $area <br>";
      
        
    }

    public function calcularAreaQuadrado($lado1,$lado2)
    {
        $this->lado1=$lado1;
        $this->lado2=$lado2;

        $area=$lado1*$lado2;

        echo "area do quadrado $area<br>";
    }

    public function calcularAreaLosango($diagonal, $diagona2)
    {
        $this->diagonal=$diagonal;
        $this->diagona2=$diagona2;

        $area=($diagonal*$diagona2)/2;
        echo "area do losango $area";
    }
}

$t=new Calcular();
$t->calcularAreaTrapezio(10,4,5);

$q=new Calcular();
$q->calcularAreaQuadrado(10,6);

$l=new Calcular();
$l->calcularAreaLosango(10,7);


?>