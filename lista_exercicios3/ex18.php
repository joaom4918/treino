<?php namespace lista_Exercicios3\ex18;?>

 <div class="titulo">Exercicio 18</div>
<?php 

if(count($_POST)>0){
    $erros=[];

    if(!filter_input(INPUT_POST,'distancia')){
        $erros['distancia']="voce não digitou a distancia a ser percorrida";
    }
}
?>


<form action="#" method="post">
    <input type="number" name="distancia" class="<?=$erros['distancia']?'is-invalid':'' ?>" placeholder="Digite distancia que deseja percorrer"><br>
    <div class="invalid-feedback">
        <?= $erros['distancia'] ?>
    </div>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php

$distancia=isset($_POST['distancia'])?$_POST['distancia']:0;
class Radar{
    private $distancia;
    private $preco; 

    public function __construct($distancia,$preco)
    {
        $this->distancia=$distancia;
        $this->preco=$preco;
    }

    public function __get($name)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function PrecoPassagem(){
        if($this->distancia <= 200){
            $preco=$this->distancia*0.50;
            return "Distancia de viagem $this->distancia Km Preço R$".number_format($preco,2);
        }else{
            $preco=$this->distancia*0.40;
            return "Distancia de viagem $this->distancia Km Preço R$".number_format($preco,2);
        }
    }
}

$r= new Radar($distancia,$preco);
echo $r->PrecoPassagem();
var_dump($r);
?>