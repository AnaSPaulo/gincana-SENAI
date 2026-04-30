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
            <li><a href="classificação.php">Classificação</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Cadastrar Jogo</h1>

    <form method="POST">

<label>Equipe 1</label>
<select name="equipe1" required>
    <option>9º ANO</option>
    <option>1º EM</option>
    <option>2º EM</option>
    <option>3º EM</option>
</select>

<label>Equipe 2</label>
<select name="equipe2" required>
    <option>9º ANO</option>
    <option>1º EM</option>
    <option>2º EM</option>
    <option>3º EM</option>
</select>

<label>Modalidade</label>
<select name="modalidade" required>
    <option>Vôlei</option>
    <option>Pebolim</option>
    <option>Cabo de guerra</option>
    <option>Penalidades</option>
    <option>Tênis de mesa</option>
    <option>Embaixadinha</option>
    <option>Campo minado</option>
    <option>Lance livre</option>
    <option>Queimada</option>
</select>

<label>Vencedor</label>
<select name="vencedor" required>
    <option>9º ANO</option>
    <option>1º EM</option>
    <option>2º EM</option>
    <option>3º EM</option>
</select>

<button type="submit">Cadastrar</button>
</form>

    <?php
if (
    isset($_POST["equipe1"]) &&
    isset($_POST["equipe2"]) &&
    isset($_POST["modalidade"]) &&
    isset($_POST["vencedor"])
) {
    $e1 = $_POST["equipe1"];
    $e2 = $_POST["equipe2"];
    $mod = $_POST["modalidade"];
    $venc = $_POST["vencedor"];

    if ($e1 != $e2) {
        $linha = $e1 . "|" . $e2 . "|" . $mod . "|" . $venc . "\n";

        $arquivo = fopen("jogos.txt", "a");
        fwrite($arquivo, $linha);
        fclose($arquivo);

        echo "<p>Jogo cadastrado!</p>";
    } else {
        echo "<p>As equipes não podem ser iguais!</p>";
    }
}
?>
</main>

<footer>
    <p>© Gincana SENAI 2026 | Todos os direitos reservados</p>
</footer>

</body>
</html>