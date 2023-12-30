<?php

namespace lista_Exercicios3\ex19; ?>

<div class="titulo">Exercicio 19</div>

<?php
if (count($_POST) > 0) {
    $erros = [];

    if (!filter_input(INPUT_POST, 'largura')) {
        $erros['largura'] = "voce não digitou a largura do terreno";
    }

    if (!filter_input(INPUT_POST, 'comprimento')) {
        $erros['comprimento'] = "voce não digitou o comprimento";
    }
}
?>
<form action="#" method="post">
    <input type="text" name="largura" class="<?= $erros['largura'] ? 'is-invalid' : '' ?>" placeholder="Digite largura do terreno"><br>
    <div class="invalid-feedback">
        <?= $erros['largura'] ?>
    </div>
    <input type="text" name="comprimento" class="<?= $erros['comprimento'] ? 'is-invalid' : '' ?>" placeholder="Digite largura do  terreno"><br>
    <div class="invalid-feedback">
        <?= $erros['comprimento'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$largura = isset($_POST['largura']) ? $_POST['largura'] : 0;
$comprimento = isset($_POST['comprimento']) ? $_POST['comprimento'] : 0;

class Terreno
{
    private $largura;
    private $comprimento;
    private  $area;

    public function __construct($largura, $comprimento,$area)
    {
        $this->largura = $largura;
        $this->comprimento = $comprimento;
        $this->area=$this->largura*$this->comprimento;
    }

    public function __get($name)
    {
    }

    public function __set($name, $value)
    {
    }

    public function ClassificarTerreno(){

        if($this->area<100){
            echo "Terreno Popular ".floatval($this->area)."<br>";
            echo "<img height='500' width='500' src='https://imgs.nestimg.com/loteterreno_a_venda_360_m_por_r_280_000_5350007665134894371.jpg' />";
        }elseif($this->area >=100 && $this->area <=500 ){
            echo "Terreno Master ".floatval($this->area)."<br>";
            echo "<img height='500' width='500'src='https://img.olx.com.br/images/52/520222206055349.jpg'/>  ";
        }elseif($this->area >500){
            echo "Terreno Vip ".floatval($this->area)."<br>";
            echo "<img height='500' width='500' src='https://www.cordeirosimoveis.com.br/admin/imovel/mini/6070.jpg'/>";
        }
    }

 
}


$terreno1 = new Terreno($largura, $comprimento,$area);
 $terreno1->ClassificarTerreno();



?>

<img src=""  alt="" width="">
