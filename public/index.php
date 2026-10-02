<?php

include "../infra/conexao.php";

$sql = "SELECT id, nome, categoria, descricao, preco, quantidade, validade FROM produtos";

$stmt = $conn->prepare($sql);
$stmt->execute();

$resultado = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estoque do Mercado</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>🛒 Estoque do Mercado</h1>

        <a class="botao" href="cadastrar.php">Cadastrar Produto</a>

        <br><br>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Ações</th>
            </tr>

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
                        R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?>
                    </td>

                    <td>
                        <?php echo $produto["quantidade"]; ?>
                    </td>

                    <td>
                        <?php echo $produto["data_validade"]; ?>
                    </td>

                    <td>

                        <a href="editar.php?id=<?php echo $produto["id"]; ?>">
                            Editar
                        </a>

                        |

                        <a href="excluir.php?id=<?php echo $produto["id"]; ?>"
                           onclick="return confirm('Deseja excluir este produto?')">
                            Excluir
                        </a>

                    </td>

                </tr>

            <?php } ?>

        </table>

    </div>

</body>

</html>