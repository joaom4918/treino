<?php namespace lista_Exercicios3\ex15; ?> 

<?php 

if(count($_POST)>0){
$erros=[];

if(!filter_input(INPUT_POST,'nome')){
  $erros['nome']="voce esqueceu de informar o nome";
}

if(!filter_input(INPUT_POST,'valor_compra')){
    $erros['valor_compra']="informe o valor da compra";
}
}


?>
<div class="titulo">Exercicio 15</div>

<form action="#" method="post">
    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>"placeholder="Digite digite seu nome"> <br>
     <div class="invalid-feedback">
        <?= $erros['nome'] ?>
     </div>
    <label for="sexo">informe seu sexo</label><br> 
    <select name="sexo">
        <option value="m">masculino</option>
        <option value="f">Feminino</option>
    </select><br>
    <input type="number" name="valor_compra"  class="<?= $erros['valor_compra']?'is-invalid':'' ?>"placeholder="Digite valor da compra"><br>
    <div class="invalid-feedback">
        <?= $erros['valor_compra'] ?>
    </div>
    <button class="btn btn-primary">Calcular desconto</button>
</form>
<?php 

$nome=isset($_POST['nome'])?$_POST['nome']:"desconhecido";
$sexo=$_POST['sexo'];
$valor_compra=isset($_POST['valor_compra'])?$_POST['valor_compra']:0;


class ClienteLoja{
    private $nome;
    private $sexo;
    public $valor_compra;

    public function __construct($nome,$sexo,$valor_compra)
    {
        $this->nome=$nome;
        $this->sexo=$sexo;
        $this->valor_compra=$valor_compra;        
    }

    public function CalcularDesconto(){
        switch ($this->sexo) {
            case 'm':
             
                $desconto=($this->valor_compra*5)/100;
                $novo_valor=$this->valor_compra-$desconto;  
                echo "Desconto de 5% R$".number_format($desconto,2)."<br>";  
                echo "Novo valor R$".number_format($novo_valor,2);  
                break;
            
            case 'f':
                $desconto=($this->valor_compra*13)/100;
                $novo_valor=$this->valor_compra-$desconto; 

                echo "Desonto de 13% R$".number_format($desconto,2)."<br>";
                echo "Novo valor R$".number_format($novo_valor,2);    
            break; 
        }
    }

    public function __get($name)
    {
        
    }
    public function __set($name, $value)
    {
        
    }
}

$cliente=new ClienteLoja($nome,$sexo,$valor_compra);
echo $cliente->CalcularDesconto();

?>