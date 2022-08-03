<div class="titulo">TESTE</div>

<?php 
class Exemplo {
 public $publico = 'Public';
  public function metodoPublico() { }
}
 
$obj = new Exemplo();
echo $obj->publico = 'Teste';
$obj->metodoPublico();

?>