<?php
function escrever($texto){
    echo "{$texto}<br>";

}
//escrever('Nao consigo ler Nada');

function soma($n1, $n2){
    return $n1 + $n2;
}
//echo soma(12, 90);

function conta($n1, $n2, $taxa = 2){
    return($n1 + $n2) * $taxa;
}
echo conta(1,2);
?>