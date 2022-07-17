<div class="titulo">Exercicio 3</div>

<form action="#" method="post">
    <input type="number" name="n1" placeholder="Digite 1° numero"> <br>
    <input type="number" name="n2" placeholder="Digite 2° numero"> <br>
    <select name="op">
        <option value="1">somar</option>
        <option value="2">subtrair</option>
        <option value="3">multiplicar</option>
        <option value="4">Dividir</option>
    </select>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$n1 = isset($_POST['n1']) ? $_POST['n1'] : 0;
$n2 = isset($_POST['n2']) ? $_POST['n2'] : 0;


class Calculadora
{
    protected $n1;
    protected $n2;

    public function Calcular($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $op = $_POST['op'];

        switch ($op) {
            case "1":
                $soma = $this->n1 + $this->n2;
                echo "Soma $soma";
                break;
            case "2":
                $sub = $this->n1 - $this->n2;
                echo "Subtração $sub";

                break;
            case "3":
                $mult = $this->n1 * $this->n2;
                echo "Multiplicação $mult";
                break;
            case "4":
                $div = $this->n1 / $this->n2;
                echo "Divisão $div";
                break;
        }
    }
}

$c = new Calculadora();
$c->Calcular($n1, $n2);
?>