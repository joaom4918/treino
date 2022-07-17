<div class="titulo">Exercicio 5</div>
<form action="#" method="post">
    <input type="number" name="metros" placeholder="Digite valor em metros"><br>
    <button class="btn btn-primary">calcular</button>
</form>

<?php
$metros=isset($_POST['metros'])?$_POST['metros']:0;
class Conversor{
protected $metros;

public function ConverterMetrosCentimetros($metros){
    $this->metros=$metros;
    $cent=$metros*100;
    echo "Metros convertidos em cm fica $cent";
}

}
$c=new Conversor();
$c->ConverterMetrosCentimetros($metros);
?>