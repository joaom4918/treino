<div class="titulo">Exercicio 35</div> 

<?php 

class Salario{
    protected $salario=1200;
    protected $conta1=200;
    protected $conta2=120;



    public function calcularSalario(){
      
        
        //$y=$this->salario-$this->conta1-$this->conta2;
        $jurosc1=($this->conta1*0.02)+$this->conta1;
        $jurosc2=($this->conta2*0.02)+$this->conta2;
        $sobra=$this->salario-$jurosc1-$jurosc2;
        echo "Salario Restante $sobra";
    }


}

$s1= new Salario();
$s1->calcularSalario($salario,$conta1,$conta2);
?>