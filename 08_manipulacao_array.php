<?php
echo '<pre>'; 
$carrinho = ['Arroz','Sabão','Feijão','Balinhas'];
var_dump($carrinho);

echo '<hr>';

Array_pop($carrinho);
//Array_pop remove o ultimo elemento de um array
var_dump($carrinho);

echo '<hr>';

array_shift($carrinho);
//array_shift remove o primeiro elemento do array
Var_dump($carrinho);

echo '<hr>';

unset($carrinho[0]);
//unset ele remove da memoria uma variavel
var_dump($carrinho);

echo '<hr>';

array_push($carrinho, 'tapete');
array_push($carrinho,'rodo');
// array_push adiciona elementos no array
var_dump($carrinho);

echo '<hr>';

array_unshift($carrinho,'microondas');
array_unshift($carrinho,'tapete');
//array_unshift ele adiciona em primeiro no array.
var_dump($carrinho);

 echo '<hr>';
 
$carrinho = array_unique($carrinho);
// ele tira tudo que duplicado e se torna unico
Var_dump($carrinho);

?>