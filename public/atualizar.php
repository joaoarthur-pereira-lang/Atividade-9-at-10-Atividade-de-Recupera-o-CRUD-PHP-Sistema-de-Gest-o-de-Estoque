<?php

include "../infra/conexao.php";

$id = $_POST["id"];
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

$sql = "UPDATE produtos SET
        nome = ?,
        categoria = ?,
        descricao = ?,
        preco = ?,
        quantidade = ?,
        data_validade = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar atualização: " . $conn->error);
}

$stmt->bind_param(
    "sssdisi",
    $nome,
    $categoria,
    $descricao,
    $preco,
    $quantidade,
    $data_validade,
    $id
);

if ($stmt->execute()) {

    header("Location: index.php");
    exit;

} else {

    echo "Erro ao atualizar produto: " . $stmt->error;

}

?>
