<div class="titulo">Exercicio 3</div>

<!-- <form action="#" method="post">
    <label for="data_embarque">Data Embarque</label><br>
    <input type="date" name="data_embarque"> <br>
    
    <label for="hora_partida">Horario Partida</label><br>
    <input type="time" name="hora_partida"><br>


    <button class="btn btn-primary">Calcular</button>

</form>
-->
<?php
/*$data_embarque=isset($_POST['data_embarque'])?$_POST['data_embarque']:"12/12/2000"; 
$hora_partida=isset($_POST['hora_partida'])?$_POST['hora_partida']:"00:00:00";
*/
class Passagem
{
    private $data_embarque;
    private $hora_partida;
    private $numero_voo;




    public function __construct($data_embarque, $hora_partida, $numero_voo)
    {
        $this->data_embarque = $data_embarque;
        $this->data_embarque = new DateTime(str_replace('/', '-', $data_embarque));
        $this->data_embarque->format('d/m/Y');

        $this->hora_partida = $hora_partida;
        $this->data_embarque = new DateTime(str_replace('/', '-', $hora_partida));
        $this->data_embarque->format('h');

        $this->numero_voo = $numero_voo;
    }

    public function __get($name)
    {
    }

    public function __set($name, $value)
    {
    }

    public function proximaLivre()
    {
        $this->numero_voo;
        $proximaCadeira = $this->numero_voo + 1;
        return "proximo acento disponivel $proximaCadeira <br>";
    }

    public function Verifica($numero_voo1, $numero_voo2)
    {
        $this->numero_voo = $numero_voo1;

        $this->numero_voo = $numero_voo2;

        if($numero_voo1==$numero_voo2){
            echo "vaga ocupada $numero_voo1<br>";

        }else{
            $this->proximaLivre(); 
            echo "vaga disponivel<br>";
        }
    }

  
}

$passagem1 = new Passagem('10/10/2007', '10:00', 2);
echo $passagem1->proximaLivre();

$passagem2 = new Passagem('10/10/2007', '10:00', 2);
echo $passagem2->Verifica(2,3);

$passagem1->vagas();













?>