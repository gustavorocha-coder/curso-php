<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    $arrayMulheres = [
    ['Ada Lovelace','ada-lovelace.webp','Matemática inglesa do século XIX, é reconhecida como a primeira programadora da história. Ao escrever algoritmos para a Máquina Analítica de Babbage, percebeu que computadores poderiam processar mais do que apenas números, prevendo a computação moderna.'],
    ['Grace Hopper','grace-hopper.webp','Contra-almirante da Marinha dos EUA e mestre da computação, ela criou o primeiro compilador e foi fundamental para o desenvolvimento da linguagem COBOL. É dela também a popularização do termo "debug", após remover uma mariposa de um computador.'],
    ['Dorothy Vaughan','dorothy-vaughan.png','Matemática brilhante e a primeira supervisora negra da NASA. Especialista em Fortran, ela liderou a transição para a computação eletrônica no Centro de Pesquisa Langley, garantindo que as mulheres negras tivessem espaço na corrida espacial.'],
    ['Margaret Hamilton','margareth-hamilton.webp','Cientista da computação que liderou a equipe da NASA responsável pelo software de voo do Programa Apollo. Seu código foi essencial para o pouso na Lua em 1969. Ela também é creditada por ter cunhado o termo "engenharia de software".'],
    ['Marissa Mayer','marissa-mayer1.png','Uma das primeiras engenheiras e porta-voz do Google, teve papel crucial no desenvolvimento dos principais produtos da empresa. Mais tarde, tornou-se CEO do Yahoo!, sendo uma das mulheres mais influentes e reconhecidas no mundo corporativo da tecnologia.']
    ];
    
    ?>

    <div class="galeria">
        
        
        <div class="item">
            <img src="<?php echo $arrayMulheres[0][1]; ?>">
            <h3><?php echo $arrayMulheres[0][0]?></h3>
            <p><?php echo $arrayMulheres[0][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[1][1]; ?>">
            <h3><?php echo $arrayMulheres[1][0]?></h3>
            <p><?php echo $arrayMulheres[1][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[2][1]; ?>">
            <h3><?php echo $arrayMulheres[2][0]?></h3>
            <p><?php echo $arrayMulheres[2][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[3][1]; ?>">
            <h3><?php echo $arrayMulheres[3][0]?></h3>
            <p><?php echo $arrayMulheres[3][2];?></p>
        </div>
        <div class="item">
            <img src="<?php echo $arrayMulheres[4][1]; ?>">
            <h3><?php echo $arrayMulheres[4][0]?></h3>
            <p><?php echo $arrayMulheres[4][2];?></p>
        </div>
        
    </div>

    
</body>
</html> 