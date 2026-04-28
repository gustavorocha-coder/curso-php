<?php
$carrinho =[
0 => 'macarrão',
1 => 'Feijão',
2 => 'Arraz',
3 =>'Batata'
];
echo '<pre>';
arsort($carrinho);
var_dump($carrinho);

echo '<hr>';

asort($carrinho);
var_dump($carrinho);


sort($carrinho);

var_dump($carrinho);

echo '<hr>';

?>