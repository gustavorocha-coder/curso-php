<?php
$name = 'Senac Americana - Curso de TI';
echo strtoupper($name);
//strtoupper deixa tudo em letra maiuscula
echo '<hr>';

echo strtolower($name);
//strtolower deixa a letra toda minuscula
echo '<hr>';

echo ucfirst(strtolower($name));
echo '<hr>';

echo ucwords(strtolower($name));

?>