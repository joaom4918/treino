<div class="titulo">Exercicio 24</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite nome do aluno"><br>
    <input type="text" name="nota1" placeholder="Digite 1° nota "> <br>
    <input type="text" name="nota2" placeholder="Digite 2° nota "> <br>
    <button class="btn btn-primary">calcular media</button>
</form>

<?php 
$nota1=isset($_POST['nota1'])?$_POST['nota1']:0;
$nota2=isset($_POST['nota2'])?$_POST['nota2']:0;
$nome=isset($_POST['nome'])?$_POST['nome']:"Desconhecido";





class Boletim{
    protected $nome;
    protected $nota1;
    protected $nota2;
    protected $media;
    protected $conceito;

    public function __construct($nome,$nota1,$nota2,$conceito)
    {
        $this->nome=$nome;
        $this->nota1=$nota1;
        $this->nota2=$nota2; 
      
        $media=($this->nota1+$this->nota2)/2;
        $this->media=$media;
        $this->conceito=$conceito;
       
    }

    public function CalcularMedia(){
        
        if($this->media >= 90 & $this->media <=100 ){
            $this->conceito="A";
            $resultado_parcial="Aprovado";
            echo "Media $this->media <br>";
            echo "Conceito $this->conceito<br>";
            echo "Resultado Parcial $resultado_parcial";
        
        }elseif($this->media>=75 & $this->media<90 ){
            $this->conceito="B";
            $resultado_parcial="Aprovado";
            echo "Media $this->media <br>";
            echo "Conceito $this->conceito<br>";
            echo "Resultado Parcial $resultado_parcial";
        }elseif($this->media >=60 & $this->media <75){
            $this->conceito="C";
            $resultado_parcial="Aprovado";
            echo "Media $this->media <br>";
            echo "Conceito $this->conceito<br>";
            echo "Resultado Parcial $resultado_parcial";
        }elseif($this->media>=40 & $this->media <60){
            $this->conceito="D";
            $resultado_parcial="Reprovado";
            echo "Media $this->media <br>";
            echo "Conceito $this->conceito<br>";
            echo "Resultado Parcial $resultado_parcial";
        }elseif($this->media>=0 & $this->media<40 ){
            $this->conceito="E";
            $resultado_parcial="Reprovado";
            echo "Media $this->media <br>";
            echo "Conceito $this->conceito<br>";
            echo "Resultado Parcial $resultado_parcial"; 
        }

    }

    

}

$boletim1=new Boletim($nome,$nota1,$nota2,$media,$conceito);
echo $boletim1->CalcularMedia($media);
?>



