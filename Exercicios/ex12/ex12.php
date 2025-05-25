<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <form method="post">
        <input type="number" name="numeroInserido" placeholder="Informe um número (1 à 10): " required="true" min="0" max="10"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>
</body>
</html>

<?php

$numeroInserido = $_POST['numeroInserido'];

    for ($contador = 0; $contador <= 10; $contador++) {
        echo ( $numeroInserido . ' X ' . $contador . ' = ' . $numeroInserido * $contador . '<br>');     
    }

?>