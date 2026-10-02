<?php

include "../infra/conexao.php";

$sql = "SELECT id, nome, categoria, descricao, preco, quantidade, data_validade FROM produtos";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar consulta: " . $conn->error);
}

$stmt->execute();

$resultado = $stmt->get_result();

?>