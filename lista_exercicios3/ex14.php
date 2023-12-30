<?php namespace lista_Exercicios3\ex14; ?>
<?php

if(count($_POST)>0){
    $erros=[];

    if (!filter_input(INPUT_POST, 'nome')) {
        $erros['nome'] = "voce não prencheu o campo nome";
    }

    if(!filter_input(INPUT_POST,'nasimento')){
        $erros['nasimento']="informe seu ano de nasimento";
    }
}
?>
<div class="titulo">exercicio 14</div>
<form action="#" method="post">
    <input type="text" name="nome" class="<?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Digite seu nome"><br>
    <div class="invalid-feedback">
        <?= $erros['nome'] ?>
    </div>
    <input type="number" name="nasimento" class="<?= $erros['nasimento']?'is-invalid':'' ?>" placeholder="Digite Seu ano de nasimento">
    <div class="invalid-feedback">
    <?= $erros['nasimento'] ?>
    </div>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$nome=$_POST['nome'];
$nasimento=$_POST['nasimento']; 

class Eleitor{

    private $nome;
    private $nasimento;
    public function __construct($nome,$nasimento)
    {
        $this->nome=$nome;
        $this->nasimento=$nasimento;        
    }

    public function __get($name)
    {
        
    }

    public function __set($name, $value)
    {
        
    }

    public function CalcularIdade(){
        $idade=date('Y')-$this->nasimento;
        
        if($idade >= 16 && $idade <18){
          echo "$this->nome  idade $idade voto opcional";
        }elseif($idade >18 && $idade <=65 ){
          echo "$this->nome  idade $idade idade voto obrigatorio";
        }elseif($idade >65){
            echo "$this->nome  idade $idade  aposentado não precisa votar";
        }
    }

    

}

$eleitor1=new Eleitor($nome,$nasimento);
echo $eleitor1->CalcularIdade();



?>