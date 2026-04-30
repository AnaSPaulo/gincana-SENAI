<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogos</title>
    <link rel="stylesheet" href="jogos.css">
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
    <h1>Cadastrar Jogo</h1>

    <form method="POST">
        <input type="text" name="equipe1" placeholder="Equipe 1" required>
        <input type="text" name="equipe2" placeholder="Equipe 2" required>
        <input type="text" name="modalidade" placeholder="Modalidade" required>
        <input type="text" name="vencedor" placeholder="Vencedor" required>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $e1 = $_POST["equipe1"];
        $e2 = $_POST["equipe2"];
        $mod = $_POST["modalidade"];
        $venc = $_POST["vencedor"];

        $linha = $e1 . "|" . $e2 . "|" . $mod . "|" . $venc . "\n";

        $arquivo = fopen("jogos.txt", "a");
        fwrite($arquivo, $linha);
        fclose($arquivo);

        echo "<p>Jogo cadastrado!</p>";
    }
    ?>
</main>

<footer>
    <p>© 2026 Gincana SENAI</p>
</footer>

</body>
</html>