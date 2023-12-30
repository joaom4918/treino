<div class="titulo">Exercicio 1</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome"><br>
    <input type="number"name="n_prova1" placeholder="Digite nota da 1° prova"> <br>
    <input type="number"name="n_prova2" placeholder="Digite nota da 2° prova "> <br> 
    <input type="number"name="trabalho" placeholder="Digite nota de Trabalho"> <br> 
    <button class="btn btn-primary">Calcular media</button>
</form>


<?php 
$nome=isset($_POST['nome'])?$_POST['nome']:"desconhecido";
$np1=isset($_POST['n_prova1'])?$_POST['n_prova1']:0;
$np2=isset($_POST['n_prova2'])?$_POST['n_prova2']:0;
$n_trabalho=isset($_POST['trabalho'])?$_POST['trabalho']:0;


class Aluno{
    private $nome;
    private $np1;
    private $np2;
    private $n_trabalho;
    private $media;
    

    public function __construct($nome,$np1,$np2,$n_trabalho) 
    {
        $this->nome=$nome;
        $this->np1=$np1;
        $this->np2=$np2;
        $this->n_trabalho=$n_trabalho;
      
      

        
    }

    public function __get($atrib)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function CalcularMedia(){
        $this->media=($this->np1*2.5+$this->np2*2.5+$this->n_trabalho*2)/7;
        return "media".number_format($this->media,2)."<br>";
        
    }

    public function Recuperacao(){
        $this->media;
        if($this->media<60){
            echo "Aluno: $this->nome prova final obrigatoria";
        }elseif($this->media>=60){
            echo "Aluno $this->nome prova final opcional";
        }
    }

    public function apresentar(){
        echo $this->Recuperacao()."<br>";
        echo $this->CalcularMedia()."<br>";
    }
    
    
}

$aluno1=new Aluno($nome,$np1,$np2,$n_trabalho);
$aluno1->apresentar();


?>