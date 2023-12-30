
<div class="titulo">Exercicio 4</div>

<form action="#" method="post">
    <label for="nome">nome</label><br>
    <input type="text" name="nome" placeholder="Digite nome do produto"><br>
    <label for="numero_item">numero item</label><br>
    <input type="number" name="numero_item" placeholder="Digite numero do item"><br>
    <label for="preco_unitario">preco unitario</label><br>
    <input type="text" name="preco_unitario" placeholder="Digite preço unitario do produto"><br>
    <label for="qtde">qtde</label><br>
    <input type="number" name="qtde" placeholder="Digite qtde"> <br>
    <label for="descricao">descrição</label> <br>
    <textarea name="descricao"cols="30" rows="10"></textarea> <br>
    <button class="btn btn-primary">enviar</button>
</form>
<?php 

$nome=isset($_POST['nome'])?$_POST['nome']:"unknow";
$numero_item=isset($_POST['numero_item'])?$_POST['numero_item']:0;
$preco_unitario=isset($_POST['preco_unitario'])?$_POST['preco_unitario']:0;
$qtde=isset($_POST['qtde'])?$_POST['qtde']:0;
$descricao=isset($_POST['descricao'])?$_POST['descricao']:0;

class Fatura{ 

    private $nome;
    private $numero_item;
    private $preco_unitario;
    private $qtde;
    private $descricao;
    private $total;
  

    public function __construct($nome,$numero_item,$preco_unitario,$qtde,$descricao)
    {
        $this->nome=$nome;
        $this->numero_item=$numero_item;
        $this->preco_unitario=$preco_unitario;
        $this->qtde=$qtde;
        $this->descricao=$descricao;
       
     
    }

      
    public function __set($nome, $valor)
    {
    }


    public function __get($nome)
    {
    }


    public function CalcularTotal(){
      
        $total=$this->preco_unitario*$this->qtde;

        return "Total R$:".number_format($total,2);

      
    }

    public function apresentarFatura(){
        echo "Produt: $this->nome<br>";
        echo "Numero: $this->numero_item<br>";
        echo "Preço: R$".number_format( $this->preco_unitario,2)."<br>";
        echo "Qtde: $this->qtde<br>";
        echo $this->CalcularTotal();

    }

}

$fatura1=new Fatura($nome,$numero_item,$preco_unitario,$qtde,$descricao);
$fatura1->apresentarFatura();


?>