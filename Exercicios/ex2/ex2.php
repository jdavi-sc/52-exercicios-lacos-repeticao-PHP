<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    
    <form action="ex2.php" method="post">
        <input type="text" name="nomeDeUsuario" placeholder="Insira o nome de usuario: " required="true"><br><br>
        <input type="text" name="senhaDoUsuario" placeholder="Insira sua senha: " required="true"><br><br>
        <input type="submit" value="Verificar">
    </form>

</body>
</html>


<?php

    $nomeDeUsuario = $_POST["nomeDeUsuario"];
    $senhaDoUsuario = $_POST["senhaDoUsuario"];

    while ($senhaDoUsuario == $nomeDeUsuario) {
        echo"<br> Coloque uma senha diferente do nome de usuário <br>";
        return;
    }

    if ($senhaDoUsuario <> $nomeDeUsuario) {
        echo "<br> Acesso permitido";
    }
?>