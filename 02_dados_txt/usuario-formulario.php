<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do usuario</title>
</head>
<body>
    <h1>Cadastro do usuario</h1>
<form action="usuario-salva.php" method='post'>
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>E-mail:</label>
    <input type="email" name="email"><br>

    <label>Senha:</label>
    <input type="password" name="senha"><br>
    
    <label>Telefone:</label>
    <input type="text" name="telefone"><br>

    <label>Endereço:</label>
    <input type="text" name="endereco"><br>

    <button type="submit">Cadastrar</button>
    <button type="reset">Limpar</button>
</form>



    
</body>
</html>