<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>🛒 Cadastrar Produto</h1>

        <form action="salvar.php" method="POST">

            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Categoria:</label>
            <input type="text" name="categoria" required>

            <label>Descrição:</label>
            <input type="text" name="descricao" required>

            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" min="0" required>

            <label>Quantidade em estoque:</label>
            <input type="number" name="quantidade" min="0" required>

            <label>Data de validade:</label>
            <input type="date" name="data_validade" required>

            <br>

            <button type="submit">Cadastrar Produto</button>

        </form>

        <br>

        <a href="index.php">Voltar</a>

    </div>

</body>

</html>