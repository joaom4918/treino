<?php

namespace lista_Exercicios3\ex13; ?>

<?php

if (count($_POST) > 0) {
    $erros = [];
    if (!filter_input(INPUT_POST, 'velocidade_carro')) {
        $erros['velocidade_carro'] = "Digite velocidade do carro";
    }
}
?> 
<div class="titulo">Exercicio 13</div>

<form action="#" method="post">

    <input type="number" name="velocidade_carro" class="<?= $erros['velocidade_carro'] ? 'is-invalid' : '' ?>"" placeholder="Digite velocidade do carro">
    <div class="invalid-feedback">
        <?= $erros['velocidade_carro'] ?>
    </div>
    <button class="btn btn-primary">calcular tempo de vida</button>
</form>
<?php

$vel_car = isset($_POST['velocidade_carro']) ? $_POST['velocidade_carro'] : 0;



class Radar
{
    private $vel_car;
    private $max_vel_permitida = 80;


    public function __construct($vel_car)
    {
        $this->vel_car = $vel_car;
        $this->max_vel_permitida;
        $this->km_acima;
    }

    public function __get($name)
    {
    }

    public function __set($name, $value)
    {
    }

    public function ChecarVelocidade()
    {
        $km_acima = $this->vel_car - $this->max_vel_permitida;
        if ($this->vel_car > $this->max_vel_permitida) {
            $multa = $this->km_acima * 5;

            echo "O carro esta $this->km_acima km acima da velocidade maxima permitida $this->max_vel_permitida km <br>";
            echo "Multa R$" . number_format($multa, 2);
        } else {
            echo "$this->max_vel_permitida km Dentro do Limite de velocidade";
        }
    }
}

$carro1 = new Radar($vel_car);
echo $carro1->ChecarVelocidade();






?>