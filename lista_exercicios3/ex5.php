<div class="titulo">Exercicio 5</div>

<form action="#" method="post">
    <input type="text" name="first_name" placeholder="enter with your first name"> <br>
    <input type="text" name="last_name" placeholder="enter with your last name"> <br>
    <input type="text" name="monthly_salary" placeholder="enter with your monthly salary "> <br>
    <button class="btn btn-primary">enviar</button>
</form>

<?php

$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "unknow";
$last_name =  isset($_POST['last_name']) ? $_POST['last_name'] : "unknow";
$monthly_salary = isset($_POST['monthly_salary']) ? $_POST['monthly_salary'] : 0.0;

class Employee
{
    protected  $first_name;
    protected  $last_name;
    protected  $monthly_salary;

    public function __construct($first_name, $last_name, $monthly_salary)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->monthly_salary = $monthly_salary;
    }



    public function NewMonthySalary()
    {
        $increase = ($this->monthly_salary * 0.10) + $this->monthly_salary;
        echo "Novo salario  mensal com aumento de 10% ".$this->NewMonthySalary()."<br>";
        return "R$".number_format($increase,2);
    }

    public function calculateYearlySalary(){
        $yearly_salary=$this->monthly_salary*12;
        $increase=($yearly_salary*0.10)+$yearly_salary;
        echo "Salario Anual R$".number_format($yearly_salary,2)."<br>";
        echo "Salario Anual com aumento de 10% ".number_format($increase,2)."<br>";

    }

    public function apresentar(){
        echo "Nome Completo: $this->first_name $this->last_name <br>";
        echo "Salario Mensal:R$ ".number_format($this->monthly_salary,2)."<br>";
        echo $this->calculateYearlySalary();

    }
}

$empregado1 = new Employee($first_name, $last_name, $monthly_salary);
$empregado1->apresentar();



?>