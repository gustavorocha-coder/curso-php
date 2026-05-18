<?php
$artista = $_POST['artista'];
$nomedoalbum = $_POST['nomedoalbum'];
$anodoalbum = $_POST['anodoalbum'];

$arquivo = fopen("album_db.txt","a");
fwrite($arquivo,"$artista \t $nomedoalbum \t $anodoalbum \n");
fclose($arquivo);
header('location: formulario-album.php');

?>