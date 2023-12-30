<?php namespace lista_Exercicios3\ex10;

use Exception;

 ?>

<div class="titulo">Exercicio 10</div>


<?php
class Cadastro{
    public $nome;
    public $sobrenome;
    public $ano_nas;

    public function __construct($nome,$sobrenome,$ano_nas)
    {
        $this->nome=$nome;
        $this->sobrenome=$sobrenome;
        $this->ano_nas=$ano_nas;
    }

    public function apresentar(){
        echo "Nome:$this->nome<br>";
        echo "Sobrenome:$this->sobrenome<br>";
      
    }

    public function CalcularIdade(){
        $idade=2022-$this->ano_nas;
        try{ 
            if($idade > 100){
                throw new Exception('Pessoa centenaria ou ano de nasimento informado errado ');
            }
        }catch(Exception $e){
            echo  "possivel erro ".$e->getMessage();
        }finally{
            return "Idade:$idade";
        }

        
        
    }



    

 

}

$cad=new Cadastro('joao','marcos',1900);
echo $cad->apresentar();
echo $cad->CalcularIdade();



?>