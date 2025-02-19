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
    <h1>Lista de Clientes</h1>

    <table>
        <tr>
            <td>Id. cliente</td>
            <td>Nome</td>
            <td>Cpf</td>
            <td>Endereço</td>
        </tr>
        <?php

        $sql = "SELECT * FROM tb_cliente";
        $resultados = mysqli_query(mysql: $conexao, query: $sql);

        while ($linha = mysqli_fetch_array(result: $resultado)) {
            $id = $linha['idcliente'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $endereco = $linha['endereco'];       
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cpf</td>";
            echo "<td>$endereco</td>";
            echo "<td>";
        }
        ?>
    </table>
</body>
</html>