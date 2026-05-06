<?php
$nome = 'Carlos Ferreira';
 if (isset($nome)){
    echo$nome;
 }else{
    echo 'Não Existe!';

 }
 unset($nome);
 if (isset($nome)){
    echo $nome;
 }else{
    echo 'Não Existe!';
 }
?>