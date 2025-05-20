<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>


    <form action="ex1.php" method="post">
        <input type="number" name="notaInserida" placeholder="Insira uma nota (1 à 10): " required="true" min="0"><br><br>
        <input type="submit" value="Verificar">
    </form>

</body>
</html>

<?php

    $notaInserida = $_POST["notaInserida"];

    while ($notaInserida > 10) {
        echo "nota inválida <br>";
        return;
    }
    
    if ($notaInserida >= 0 && $notaInserida <= 10) {
        echo "Nota $notaInserida válida";
    }

?>