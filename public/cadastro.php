<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Cadastrar Produto</title>

    <link rel="stylesheet" href="../style/style.css">

</head>

<body>

    <h1>🛒 Cadastrar Produto</h1>

    <form action="salvar.php" method="POST">

        <label>Nome:</label>

        <input
            type="text"
            name="nome"
            required
        >

        <label>Categoria:</label>

        <input
            type="text"
            name="categoria"
            required
        >
        <label>Descrição:</label>

        <input
            type="text"
            name="descricao"
            required
        >

        <label>Preço:</label>

        <input
            type="number"
            name="preco"
            step="0.01"
            min="0"
            required
        >

        <label>Quantidade em estoque:</label>

        <input
            type="number"
            name="quantidade"
            min="0"
            required
        >

        <label>Data de validade:</label>

        <input
            type="date"
            name="data_validade"
            required
        >

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <a class="voltar" href="index.php">
        ← Voltar
    </a>

</body>

</html>