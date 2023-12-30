<?php namespace App; ?>
<div class="titulo">Subnamespace</div>

<?php 

echo __NAMESPACE__.'<br>';

const constante=123;

echo "Constante". constante.'<br>';
echo "_____________________________<br>";
 
/*uma alternativa para se usar o namespace é utilizar conforme o nome da pasta e arquivos não é algo obrigatorio mais 
é recomendado para se ter um codigo organizado*/

namespace App\Principal;

echo __NAMESPACE__.'<br>';
const constante=345;
echo "_____________________________<br>";
namespace App\Principal\Especifico;
const constante=678;
echo __NAMESPACE__.'<br>';
echo constante.'<br>';
echo "_____________________________<br>";
echo constant(__NAMESPACE__.'\constante')."<br>";
#acessando a uma constante de outro namespace
echo \App\constante;



