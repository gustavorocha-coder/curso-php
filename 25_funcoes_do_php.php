<?php
$empresa = 'Senac jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('jaú','Americana',$empresa);
//ele subtitui um palavra por outra
echo "$novaEmpresa <br>";

echo substr($novaEmpresa,0, 4). "<br>";
echo strlen($novaEmpresa);
//e a quantidade caracteres

?>