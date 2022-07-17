<div class="titulo">Exercicio 27</div>

<form action="#" method="post">
    <input type="text" name="nota1" placeholder="Digite 1° nota"><br>
    <input type="text" name="nota2" placeholder="Digite 2° nota"><br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php 
   $n1=isset($_POST['nota1'])?$_POST['nota1']:0;
   $n2=isset($_POST['nota2'])?$_POST['nota2']:0;
class Nota{

     public $n1;
     public $n2;
 
     public function __construct($n1,$n2)
     {
         $this->n1=$n1;
         $this->n2=$n2;
      
     }

     public function calcular($n1,$n2){
        $x=($n1*2)+($n2*3);
        $x=$x/5;
        return "a Media ponderada é $x";
     }
   

    
}




$nota1= new Nota($n1,$n2);
echo $nota1->calcular($n1,$n2);
?>