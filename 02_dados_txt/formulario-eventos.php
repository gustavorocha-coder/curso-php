<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastro de eveto</h1>
    <form action="eventos-salvar.php" method='post'>

        <label>nome</label>
        <input type="text" name="nome"><br>

        <label>tipo</label>
        <input type="text" name="tipo"><br>

        <label>data</label>
        <input type="date" name ="data"><br>

        <button type="submit">Cadastra</button>
        <button type="reset">Limpar</button>

    </form>

    <hr>
    <h2>listagem de eventos</h2>

</body>
</html>