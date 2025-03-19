<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        nome:
        <input type="text" name="nome"> <br>
        tipo:
        <input type="text" name="tipo"><br>
        precocompra:
        <input type="text" name="precocompra"><br>
        precovenda:
        <input type="text" name="precovenda"><br>
        margemlucro:
        <input type="text" name="margemlucro">
        quantidade:
        <input type="text" name="quantidade">

        <input type="submit" value="cadastrar">
    </form>

</body>
</html>