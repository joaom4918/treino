<div class="titulo">Exercicio 6</div>
<form action="#" method="post">
    <input type="text" name="valor" placeholder="Digite um valor"><br>
    <input type="number" name="aumentar" placeholder="aumentar valor do contador" > <br>
    <button class="btn btn-primary">iniciar</button>


</form>

<?php

$valor=isset($_POST['valor'])?$_POST['valor']:0;
$aumento=isset($_POST['aumentar'])?$_POST['aumentar']:0;
class Contador{
    private $valor;
    private $aumento;
    
    public function __construct($valor,$aumento)
    {
        $this->valor=$valor;
        $this->aumento=$aumento;
    }

    public function __get($name)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function zerar(){
        return $this->valor=0; 
    }

    public function incrementar($aumento){
         
        return $this->valor+$aumento;       
    }

    public function RetornarValor(){
        return $this->valor;
    }
}


$contador1=new Contador($valor,$aumento);
echo $contador1->incrementar($aumento)."<br>";
echo $contador1->RetornarValor();




?>