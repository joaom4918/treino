<div class="titulo">Exercicio 7</div>


<?php

class Porta
{
    private $aberta;
    private $cor;
    private $dimensaox;
    private $dimensaoy;
    private $dimensaoz;

    public function __construct($aberta, $cor, $dimensaox, $dimensaoy, $dimensaoz)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaox = $dimensaox;
        $this->dimensaoy = $dimensaoy;
        $this->dimensaoz = $dimensaoz;
    }

    public function __get($atrib)
    {
    }

    public function __set($atrib, $value)
    {
    }

    public function abre()
    {
        $this->aberta = TRUE;
        return "Porta Aberta";
    }

    public function fecha()
    {
        $this->aberta = FALSE;
        return "Porta Fechada";
    }

    public function pintar($novacor)
    {
        $this->cor = $novacor;
        return "$novacor";
    }
}

$porta1 = new Porta('porta de madeira', 'amarela', 2.00, 92, 2.10);
$porta1->pintar('vermelho');
echo $porta1->fecha();

$porta2 = new Porta('porta de madeira', 'verde', 2.00, 92, 2.10);
echo $porta1->fecha();

$porta3 = clone $porta2;




class Casa
{
    private $porta1;
    private $porta2;
    private $porta3;

   
}

$casa1 = new Casa($porta1,$porta2,$porta3);



class Edificio{

}

class Propriedade{

}
?>