<div class="titulo">Classe</div>

<?php
class Cliente
{
    public   $nome = "anonimo";
    public   $idade = 16;
    public   $sexo = "f";



    public function apresentar()
    {
        return  "oii eu sou {$this->nome} tenho {$this->idade}";
    }
}

$p = new Cliente();
echo $p->apresentar()."<br>";

$p2 = new Cliente();
$p2->nome = "pedro";
$p2->idade = "7";
echo $p2->apresentar()."<br>";


?>