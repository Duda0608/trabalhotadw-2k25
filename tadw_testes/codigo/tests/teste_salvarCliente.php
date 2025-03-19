<?php

require_once "../conexao.php";
require_once "../funcoes.php";

echo "oi";

$nome = "Teste";
$cpf = "000.000.000-10";
$endereco = "Rua Automatoico";

salvarCliente($conexao, $nome, $cpf, $endereco);