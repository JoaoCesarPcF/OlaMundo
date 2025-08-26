<!DOCTYPE html>
<html leng="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <h1> Sua resposta foi: </h1>
    <br>
    <?php
        $v = $_GET["opcao"];
        echo "Você escolheu $v";
    ?>
</body>
</html>
