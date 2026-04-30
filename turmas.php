<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Turmas</title>
    <link rel="stylesheet" href="turmas.css">
</head>
<body>

<header>
    <nav>
        <h2>Gincana SENAI</h2>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="turmas.php">Turmas</a></li>
            <li><a href="jogos.php">Jogos</a></li>
            <li><a href="classificacao.php">Classificação</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Cadastrar Turma</h1>

    <form method="POST">
        <input type="text" name="turma" placeholder="Nome da turma" required>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $turma = $_POST["turma"];

        $arquivo = fopen("turmas.txt", "a");
        fwrite($arquivo, $turma . "\n");
        fclose($arquivo);

        echo "<p>Turma cadastrada!</p>";
    }
    ?>
</main>

<footer>
    <p>© 2026 Gincana SENAI</p>
</footer>

</body>
</html>