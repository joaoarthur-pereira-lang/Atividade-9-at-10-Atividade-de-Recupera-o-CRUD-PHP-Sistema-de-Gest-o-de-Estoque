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

<?php while ($produto = $resultado->fetch_assoc()) { ?>

            <tr>

                <td>
                    <?php echo $produto["id"]; ?>
                </td>

                <td>
                    <?php echo $produto["nome"]; ?>
                </td>

                <td>
                    <?php echo $produto["categoria"]; ?>
                </td>

                <td>
                    <?php echo $produto["descricao"]; ?>
                </td>

                <td>
                    R$
                    <?php echo number_format($produto["preco"], 2, ",", "."); ?>
                </td>

                <td>
                    <?php echo $produto["quantidade"]; ?>
                </td>

                <td>
                    <?php
                    echo date("d/m/Y", strtotime($produto["data_validade"]));
                    ?>
                </td>