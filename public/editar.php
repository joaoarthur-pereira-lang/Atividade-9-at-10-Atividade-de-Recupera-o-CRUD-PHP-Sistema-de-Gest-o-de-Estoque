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

$stmt->bind_param("i", $id);

$stmt->execute();

$resultado = $stmt->get_result();

$produto = $resultado->fetch_assoc();

if (!$produto) {
    die("Produto não encontrado.");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Editar Produto</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>✏️ Editar Produto</h1>

    <form action="atualizar.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?php echo $produto["id"]; ?>"
        >

        <label>Nome:</label>

        <input
            type="text"
            name="nome"
            value="<?php echo $produto["nome"]; ?>"
            required
        >

        <label>Categoria:</label>

        <input
            type="text"
            name="categoria"
            value="<?php echo $produto["categoria"]; ?>"
            required
        >

        <label>Descrição:</label>

        <input
            type="text"
            name="descricao"
            value="<?php echo $produto["descricao"]; ?>"
            required
        >
         <label>Preço:</label>

        <input
            type="number"
            name="preco"
            step="0.01"
            min="0"
            value="<?php echo $produto["preco"]; ?>"
            required
        >

        <label>Quantidade em estoque:</label>

        <input
            type="number"
            name="quantidade"
            min="0"
            value="<?php echo $produto["quantidade"]; ?>"
            required
        >

        