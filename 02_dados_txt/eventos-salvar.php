<?php
$nome =$_POST['nome'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];

$arquivo = fopen ('eventos_db.txt','a');
fwrite("$arquivo, $nome-$tipo-data\n");
header('location:formulario-eventos.php');
?>