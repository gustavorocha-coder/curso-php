<?php
$infoEmpresa =[
'nome' => 'Senac America',
'funcionario'=> 'Paulo Santos',
'anoAtual' => 2026,    
];
$infoCurso =[
'curso' => ['PHP','JS','Vue JS','Laravel'],
'totalCurso' => 26,
];

echo '<pre>';

var_dump(array_Keys($infoEmpresa));
//(array_keys) mostra as chaves do valor.
var_dump(array_values($infoEmpresa));
//mostra os valores do array.
var_dump(count($infoEmpresa));
//var_dump(count ele mostra a quantidade de elementos do array.
$infoEmpresa = array_merge($infoEmpresa, $infoCurso);
//array_merge ele serve para junta os array
print_r($infoEmpresa);
//print_r ele mostra tambem a estrutura do array.


?>