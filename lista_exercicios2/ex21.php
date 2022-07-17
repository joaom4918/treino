<div class="titulo">Exercicio 21</div>

<form action="#" method="post">
    <label for="nome">Nome</label> <br>
    <input type="text" name="nome" placeholder="Digite nome do funcionario"><br>
    <label for="salario">salario</label><br>
    <input type="number" name="salario" placeholder="Digite salario"> <br>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php
$salario = isset($_POST['salario']) ? $_POST['salario'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : 0;

interface Contabilidade
{
    public function CalcularSalario($salario);
}

class Funcionario implements Contabilidade
{
    protected $nome;
    protected $salario;

    public function Funcionario($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function CalcularSalario($salario)
    {
        $aumento1 = ($salario * 0.20) + $salario;
        $aumento2 = ($salario * 0.15) + $salario;
        $aumento3 = ($salario * 0.10) + $salario;
        $aumento4 = ($salario * 0.05) + $salario;
        //percentual de aumento
        $perc1=($salario*0.20);
        $perc2=($salario*0.15);
        $perc3=($salario*0.10);
        $perc4=($salario*0.05);
        
        

        if ($salario <= 280) {
            echo "Aumento de 20%: R$".number_format($aumento1,2)."<br>";
            echo "Valor aumentado: R$".number_format($perc1,2);   
        } elseif ($salario > 280 && $salario < 700) {
            echo "Aumento de 15%: R$".number_format($aumento2,2)."<br>";
            echo "Valor aumentado: R$".number_format($perc2,2)."<br>";
        } elseif ($salario > 700  && $salario < 1500) {
            echo "Aumento de 10%: R$".number_format($aumento3,2)."<br>";
            echo "Valor aumentado: R$".number_format($perc3,2)."<br>";
        } elseif ($salario > 1500) {
            echo "Aumento de 5%: R$".number_format($aumento4,2)."<br>";
            echo "Valor aumentado: R$".number_format($perc4,2)."<br>";
        }

    }

    public function Imprimir($salario){
        echo "Funcionario: $this->nome <br>";
        echo "Salario sem reajuste: R$".number_format($salario,2)."<br>";
            self::CalcularSalario($salario);

           
          
    }

    
}


$f1=new Funcionario($nome,$salario);
$f1->Imprimir($salario);




?>