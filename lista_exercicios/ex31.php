<div class="titulo">Exercicio 31</div>

<form action="#" method="post">

<input type="number" name="p_kilo"placeholder="Digite seu peso em gramas"> <br>
<button class="btn btn-primary">calcular</button>
</form>

<?php

$p_kilo=isset($_POST['p_kilo'])?$_POST['p_kilo']:0; 

interface Converter{
public function gramakilo($p_kilo);

}

class ConverterPeso implements Converter {
    protected $p_kilo;

    public function gramakilo($p_kilo){
        $this->p_kilo=$p_kilo;
        $x=$this->p_kilo*1000;
        echo "{$this->p_kilo} KG =$x gramas";
    }


}

$c= new ConverterPeso();
$c->gramakilo($p_kilo);
?>