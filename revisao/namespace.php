<?php  namespace contexto; ?>
<div class="titulo">NameSpace</div>
<!-- o namespace tem por obrigação ser a primeira sentença de qual quer arquivo php-->
<?php 
// pegando o namespace atual sendo usando
echo "namespace atual ".__NAMESPACE__."<br>";
// padrao todo nome de contante é usado letra maiuscula
const CONTEXTO1=123;

/* para usar uma constante associado a nomespace usando define
coloca primeiro o nome do namespace a constante e o que a constante esta recebendo.
*/
define('contexto\CONSTANTE2',234);
define(__NAMESPACE__.'\CONSTANTE3',567);
define('outro_contexto\CONSTANTE4',899);

echo CONTEXTO1."<br>";
echo CONSTANTE2."<br>";
echo \contexto\CONSTANTE3.'<br>';
// acessando usando constant
echo constant(__NAMESPACE__.'\CONSTANTE3').'<br>';
echo \outro_contexto\CONSTANTE4;
echo realpath(dirname(__FILE__)); 



?>



