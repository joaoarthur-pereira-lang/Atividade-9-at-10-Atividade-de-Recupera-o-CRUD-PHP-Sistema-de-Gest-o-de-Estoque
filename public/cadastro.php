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