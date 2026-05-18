<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastra album</h1>
    <form action="album-salva.php" method='post'>

<label>artista</label>
<input type="text" name="artista"><br>

<label>nome do album</label>
<input type="text" name="nomedoalbum"><br>

<label>ano do album</label>
<input type="text" name="anodoalbum"><br>

<button type="submit">Cadastra</button>
<button type="reset">Limpar</button>

    </form>

    <hr>
    <h2>listagem de albuns</h2>
    <?php
    $arquivo = fopen("album_db.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>