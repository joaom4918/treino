<div class="titulo">assosição</div>

<?php 

class Estado{
    public $nome;
    public $sigla;

    function __construct($nome=null,$sigla=null)
    {
        $this->nome=$nome;
        $this->sigla=$sigla;

    }
}

class Cidade{
    public $nome;
    public $estado;
    function __construct($nome=null,$estado=null){
        $this->nome=$nome;
        $this->estado=$estado;        
    }
}

$estado=new Estado("Parana","PR");
$cidade=new  Cidade("Paranavai",$estado);
echo $cidade->nome.'-'.$cidade->estado->sigla;
?>