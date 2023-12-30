<div class="titulo">Exercicio 2</div>

<?php

class Date
{

    private $data1;
    private $data2;
    private $ano;

    public function __construct($data1)
    {
      
        $this->data1 = $data1;
        $this->data1 = new DateTime(str_replace('/', '-', $data1));
        $this->data1->format('d/m/Y'); 
    }
    public function __set($nome, $valor)
    {
    }


    public function __get($nome)
    {
    }

    public function apresentar()
    {
        echo $this->data1->format("d/m/Y") . "<br>";
    }

    public function Verificarbisexto($ano)
    {
      $this->ano=$ano;
      echo "Repita o ano da data<br>";
      if($ano %4==0){
        echo "Verdadeiro";
      }else{
        echo "Falso";
      }

    }

    public function Compara($data2){
       
    $this->data2=$data2;
    $this->data2=new DateTime(str_replace('/','-',$data2));

   
    
    if($this->data1 == $this->data2){
        return 0;
    }elseif($this->data1 > $this->data2){
        return 1;
    }elseif($this->data2>$this->data1){
        return -1;
    }
   
    

    
     

    }
}

$date1 = new Date('12/12/2004');
$date1->apresentar();


echo $date1->Verificarbisexto(2004)."<br>";
echo $date1->Compara('12/12/2004')."<br>"; 




// clonando objeto date1
$date2 = clone $date1;
$date2->apresentar();
?>