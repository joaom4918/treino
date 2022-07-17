<div class="titulo">Exercicio 4</div>
<form action="#" method="post">
    <input type="text" name="nota1" placeholder="Digite 1° nota"><br>
    <input type="text" name="nota2" placeholder="Digite 2° nota"><br>
    <input type="text" name="nota3" placeholder="Digite 3° nota"><br>
    <button class="btn btn-primary">Calcular</button>
</form>

<?php
    $n1=isset($_POST['nota1'])?$_POST['nota1']:0;
    $n2=isset($_POST['nota2'])?$_POST['nota2']:0;
    $n3=isset($_POST['nota3'])?$_POST['nota3']:0;
class Aluno{
    protected $n1;
    protected $n2;
    protected $n3;

    public function CalcularMedia($n1,$n2,$n3){
        $this->n1=$n1;  
        $this->n2=$n2;  
        $this->n3=$n3;  
        $media=$this->n1+$this->n2+$this->n3/3;
        echo "Media $media";
    }

}

$a=new Aluno();
$a->CalcularMedia($n1,$n2,$n3);
?>