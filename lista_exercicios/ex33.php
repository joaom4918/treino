<div class="titulo">Exercicio 33</div>

<form action="#" method="post">
    <input type="text" name="s_minimo" placeholder="Digite salario minimo"> <br>
    <input type="number" name=qtde placeholder="Digite quantidade de salarios minimos"> <br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$sm=isset($_POST['s_minimo'])?$_POST['s_minimo']:0;
$qtde=isset($_POST['qtde'])?$_POST['qtde']:0;

class Funcionario{

    protected $salario_minimo;
    protected $qtde;

    public function calcularSalario($sm,$qtde){
        $this->salario_minimo=$sm;
        $this->qtde=$qtde;
        $total=$this->salario_minimo*$this->qtde;
        echo "salario minimo {$this->salario_minimo}<br>";
        echo "voce recebe {$this->qtde}<br>";
        echo "total a receber $total";
    }
    
}

$f1=new Funcionario();
$f1->calcularSalario($sm,$qtde);
?>