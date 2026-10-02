<?php

include "../infra/conexao.php";

if (!isset($_GET["id"])) {
    die("Produto não informado.");
}

$id = $_GET["id"];

$sql = "SELECT id, nome, categoria, descricao, preco, quantidade, data_validade
        FROM produtos
        WHERE id = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar consulta: " . $conn->error);
}