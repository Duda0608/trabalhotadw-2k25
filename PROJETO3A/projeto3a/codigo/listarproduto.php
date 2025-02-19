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
    <h1>listar produto</h1>

    <table>
        <tr>
            <td>id. produto</td>
            <td>nome</td>
            <td>tipo</td>
            <td>preço compra </td>
            <td>preço venda</td>
            <td>margem de lucro</td>
            <td>quantidade</td>
        </tr>
        <?php
         $sql = "SELECT * FROM tb_produtos";
         $resultados = mysqli_query($conexao, $sql);

         while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['id. produtos'];
            $nome = $linha['nome'];
            $tipo = $linha['tipo'];
            $precocompra = $linha['precocompra'];
            $precovenda = $linha['precovenda'];
            $margemlucro = $linha['margemlucro']; 
            $quantidade = $linha['quantidade'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$tipo</td>";
            echo "<td>$precocompra</td>";
            echo "<td>$precovenda</td>";
            echo "<td>$margemlucro</td>";
            echo "<td>$quantidade</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>