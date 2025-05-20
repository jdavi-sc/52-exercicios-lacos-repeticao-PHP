<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="nomeDoUsuario" placeholder="Insira o seu nome: " required="true"><br><br>
        <input type="number" name="idadeDoUsuario" placeholder="Insira sua idade: " required="true"><br><br>
        <input type="number" name="salarioDoUsuario" placeholder="informe o seu salário: " required="true"><br><br>
        <input type="text" name="sexoDoUsuario" placeholder="Infome o seu sexo ('f' ou 'm'): " required="true"><br><br>
        <input type="text" name="estadoCivil" placeholder="Informe seu estado civil (s,c,v,d):" required="true"><br><br>
        <input type="submit" value="Verificar">
    </form>

</body>
</html>

<?php

$nomeDoUsuario = $_POST["nomeDoUsuario"];
$idadeDoUsuario = $_POST["idadeDoUsuario"];
$salarioDoUsuario = $_POST["salarioDoUsuario"];
$sexoDoUsuario = $_POST["sexoDoUsuario"];
$estadoCivil = $_POST["estadoCivil"];



?>