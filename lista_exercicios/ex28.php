<div class="titulo">Exercicio 28</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Digite nome do produto"> <br>
    <input type="number" name="preco" placeholder="Digite preço do produto"> <br>
    <button class="btn btn-primary">calcular preço</button>
 </form>
<?php

$preco=isset($_POST['preco'])?$_POST['preco']:0;
$nome=isset($_POST['nome'])?$_POST['nome']:"Generico";
class Produto{
    public $nome;
    public $preco;


    public function Desconto($preco){
        $this->preco=$preco;
        $x=($this->preco*0.1);
        $desc=$this->preco-$x;
        echo "o preço com desconto sera $desc";
      
       
    }
}

$p1=new Produto();
$p1->Desconto($preco);
var_dump($p1); 
?>

