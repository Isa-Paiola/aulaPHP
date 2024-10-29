<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>

</head>
<body>
    <h1>Verifique se você pode dirigir</h1>

    <form method="POST">
        <p>Digite sua idade</p>
        <input type="text" name="nome" placeholder="Digite seu nome" require>
        <button type="submit">Verificar</button>
    </form>

    <?php

    $idade = 18;

    if($idade > 18){
        echo "<p> Você não pode dirigir </p>";

    } else {
        echo "<p> Você pode dirigir </p>";
    }

    ?>
    
</body>
</html>