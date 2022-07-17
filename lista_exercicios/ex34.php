<div class="titulo">Exercicio </div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite um numero"><br>
    <button class="btn btn-primary">calcular tabuada</button>
</form>

<?php 
$n1=isset($_POST['n1'])?$_POST['n1']:0;

class Tabuada{
    protected $numero;

    public function calcularTabuada($n1){
        $this->numero=$n1;
        for ($i=0; $i <=10 ; $i++) { 
            echo "$this->numero X $i=".$this->numero*$i."<br>"; 
        }
    }
}

$t=new Tabuada();
$t->calcularTabuada($n1);
 

?>