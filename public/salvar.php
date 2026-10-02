<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data_validade = $_POST["data_validade"];

if ($nome == "" || $categoria == "" || $descricao == "" || $data_validade == "") {
    die("Preencha todos os campos.");
}

if ($preco < 0) {
    die("O preço não pode ser negativo.");
}

if ($quantidade < 0) {
    die("A quantidade não pode ser negativa.");
}
$sql = "INSERT INTO produtos
        (nome, categoria, descricao, preco, quantidade, data_validade)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar cadastro: " . $conn->error);
}

$stmt->bind_param(
    "sssdis",
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade,
    $data_validade
);