<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$endereco =$_POST['endereco'];

 $arquivo = fopen("usuario_db.txt","a");
 fwrite($arquivo,"$nome \t $email \t$senha \t$telefone \t$endereco\n");
 fclose($arquivo);
?>