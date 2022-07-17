<div class="titulo">Exercicio 22</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite nome de funcionario"> <br>
    <input type="number" name="salario_hora" placeholder="Digite salario hora"> <br>
    <input type="number" name="qtde_horas_trab" placeholder="Horas trabalhadas no mes"> <br>

    <button class="btn btn-primary">Calcular</button>
</form>

<?php
$salario_hora = isset($_POST['salario_hora']) ? $_POST['salario_hora'] : 0;
$qtde_horas = isset($_POST['qtde_horas_trab']) ? $_POST['qtde_horas_trab'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : "desconhecido";
$salario_bruto = $salario_hora * $qtde_horas;
$x = $salario_bruto - $salario_bruto * 0.05;

$inss = ($salario_bruto * 0.10);
$fgts = ($salario_bruto * 0.11);




class FolhaPagamento
{
    protected $nome;
    protected $salario_bruto;
    protected $salario_liquido;
    protected $inss;
    protected $fgts;

    public function __construct($nome,$salario_bruto, $salario_hora, $qtde_horas)
    {
        $this->nome=$nome;
        $salario_bruto = $salario_hora * $qtde_horas;
        $this->salario_bruto = $salario_bruto;
        $this->inss = ($salario_bruto * 0.10);
        $this->fgts = ($salario_bruto * 0.11);
       
    }

    public function CalcularSalario($desc_ir1, $desc_ir2, $desc_ir3,$salario_liquido)
    {
        $desc_ir1 = ($this->salario_bruto * 0.05);
        $desc_ir2 = ($this->salario_bruto * 0.10);
        $desc_ir3 = ($this->salario_bruto * 0.20);
        
   

        if ($this->salario_bruto <= 900) {
            echo "Isento De IR <br>";
            $salario_liquido = $this->salario_bruto - $this->inss;
            $total_desc0 = $this->inss;
            echo "Total de Descontos R$" . number_format($total_desc0, 2) . "<br>";
        } elseif ($this->salario_bruto > 900 && $this->salario_bruto < 1500) {
            echo "Desconto de IR 5% R$" . number_format($desc_ir1, 2) . "<br>";
            $total_desc1 = $desc_ir1 + $this->inss;
            $salario_liquido = $this->salario_bruto - $desc_ir1 - $this->inss;
            echo "Total de Descontos R$" . number_format($total_desc1, 2) . "<br>";
          
        } elseif ($this->salario_bruto >= 1500 && $this->salario_bruto < 2500) {
            echo "Desconto de IR  10% R$" . number_format($desc_ir2, 2) . "<br>";
            $total_desc2 = $desc_ir2 + $this->inss;
            $salario_liquido = $this->salario_bruto - $desc_ir2 - $this->inss;
            echo "Total de Descontos R$" . number_format($total_desc2, 2) . "<br>";
        } elseif ($this->salario_bruto > 2500) {
            echo "Desconto de  IR 20% R$" . number_format($desc_ir3, 2) . "<br>";
            $total_desc3 = $desc_ir3 + $this->inss;
            $salario_liquido = $this->salario_bruto - $desc_ir2 - $this->inss;
            echo "Total de Descontos R$" . number_format($total_desc3, 2) . "<br>";
        }


        echo "Salario Bruto R$" . number_format($this->salario_bruto, 2) . "<br>";
        echo "INSS 10% R$" . number_format($this->inss, 2) . "<br>";
        echo "FGTS 11% R$" . number_format($this->fgts, 2) . "<br>";
        echo "Salario Liquido R$" . number_format($salario_liquido, 2);  
    }
}

$func1=new FolhaPagamento($nome,$salario_bruto,$salario_hora,$qtde_horas);
echo $func1->CalcularSalario($desc_ir1,$desc_ir2,$desc_ir3,$salario_liquido)."<br>";






?>