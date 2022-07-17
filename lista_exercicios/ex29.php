<div class="titulo">Exercicio 28</div>

<form action="#" method="post">
    <input type="text" name="salario_fixo" placeholder="Digite salario fixo "> <br>
    <input type="text" name="total_vendas" placeholder="total de vendas do funcionario"> <br>
    <button class="btn btn-primary">Salario</button>
</form>

<?php

$sf = isset($_POST['salario_fixo']) ? $_POST['salario_fixo'] : 0;
$tv = isset($_POST['total_vendas']) ? $_POST['total_vendas'] : 0;
class Funcionario
{
    public $salario_fixo;
    public $total_vendas;

    public function calcularSalario($sf, $tv)
    {
        $this->salario_fixo = $sf;
        $this->total_vendas = $tv;
        $x=(4/100*$this->total_vendas);
        //salario mais 4% do total de vendas
        $salario_total=$this->salario_fixo+$x;
        echo "Total de vendas {$this->total_vendas}<br>";
        echo "Salario Fixo {$this->salario_fixo}<br>";
        echo "Salario Fixo com acréscimo de 4% de vendas $salario_total<br>";
        
    }
}

$f1= new Funcionario();
$f1->calcularSalario($sf,$tv);

?>