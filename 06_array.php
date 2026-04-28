<?php
//$carros =['jetta','golf','polo','nivus','saveiro'];
//cho $carros[1];

//$carroUm =['jetta  gli','volkswager','cinza'];
//echo $carroUm[0];
$carro_Um = [
'modelo' => 'jetta',
'marca' => 'volkswager',
'cor' => 'cinza'
];
echo 'Cor: ';
echo $carro_Um['cor'];
echo '<br>';
echo $carro_Um ['modelo'];
echo'<br>';
echo $carro_Um ['marca'];
echo'<br>';



$carro_Dois = [
'modelo' =>'Punto',
'marca' => 'Fiat',
'cor'=> 'Amarelo',
];
echo $carro_Dois['cor'];
echo '<br>';
echo $carro_Dois ['modelo'];
echo'<br>';
echo $carro_Dois ['marca'];
echo'<br>';

$carro_tres  =['Skyline gtr-34','nissan','Azul'];
echo $carro_tres[0];
$carro_tres =[
'modelo' => 'Skyline-34',
'Marca'=> 'Nissan',
'Cor' => 'Azul'
];

echo 'modelo:';
echo $carro_tres['Modelo'];
echo '<br>';

echo 'Marca:';
echo $carro_tres['Marca'];
echo '<br>';

echo 'cor:';
echo $carro_tres['Cor'];
echo '<br>';

?>
