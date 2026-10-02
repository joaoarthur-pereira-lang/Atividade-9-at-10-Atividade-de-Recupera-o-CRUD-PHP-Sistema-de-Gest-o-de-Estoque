<?php

include "../infra/conexao.php";

if (!isset($_GET["id"])) {
    die("Produto não informado.");
}

$id = $_GET["id"];

$sql = "DELETE FROM produtos WHERE id = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar exclusão: " . $conn->error);
}
