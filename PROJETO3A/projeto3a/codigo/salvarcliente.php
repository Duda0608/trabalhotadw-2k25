<?php
require_once "conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];


$sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES ('$nome', '$cpf', '$endereco')";

mysqli_query($conexao, $sql);
?>