<div class="titulo">Exercicio 14</div>

<form action="#" method="post">
    <input type="number" name="nota1" min="0" max="100" placeholder="Digite 1° nota"><br>
    <input type="number" name="nota2" min="0" max="100" placeholder="Digite 1° nota"><br>
    <input type="number" name="nota3" min="0" max="100" placeholder="Digite 3° nota"><br>
    <button class="btn btn-primary">calcular media</button>
</form>

<?php

$n1=isset($_POST['nota1'])?$_POST['nota1']:0;
$n2=isset($_POST['nota2'])?$_POST['nota2']:0;
$n3=isset($_POST['nota3'])?$_POST['nota3']:0;

interface CalcularMedia{   
public function media($n1,$n2,$n3);


}

class Aluno implements CalcularMedia{

    public function media($n1,$n2,$n3){
        $media=($n1+$n2+$n3)/3;
        if($media>=70 && $media <100){
            return "$media aprovado";
        }elseif($media<70){
            return "$media reprovado";
        }elseif($media==100){
            return "$media aprovado com destinção"; 
        }
    }

}

$aluno1=new Aluno();
echo $aluno1->media($n1,$n2,$n3);
?>