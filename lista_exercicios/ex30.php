<div class="titulo">Exercicio 30</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome"><br>
    <input type="text" name="peso" placeholder="Digite seu peso"> <br>
    <button class="btn btn-primary">calcular</button>
</form>
<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : "unknown";
$peso = isset($_POST['peso']) ? $_POST['peso'] : 0;
class Pessoa
{
    protected $nome;
    protected $peso;

    public function calcularPeso($nome, $peso)
    {
   
        $this->peso=$peso;
        $this->nome=$nome;

        $eng=(0.15*$this->peso)+$this->peso;
        $x=(0.20*$this->peso);
        $ema=$this->peso-$x;
        echo "Analisando dados de $this->nome<br>";
        echo "caso engorde 15% $eng <br>";
        echo "caso emagreça 20% $ema<br>";
    }


}

$p1=new Pessoa();
$p1->calcularPeso($nome,$peso);
?>