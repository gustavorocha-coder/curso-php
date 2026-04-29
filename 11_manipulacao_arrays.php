<?php
echo '<pre>';
$nomes = ['Rubens', 'Senac', 'Americana',];

$nomes[0] = strtolower($nomes[0]);
$nomes[1] = strtolower($nomes[1]);
$nomes[2] = strtolower($nomes[2]);
var_dump($nomes);

$nomes = array_map('transformarParaMaiuscula',$nomes);
function tranformarPraMaiuscula($valor)
{
    return strtoupper($valor);
}
var_dump($nomes);
?>