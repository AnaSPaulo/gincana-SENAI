<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação</title>
    <link rel="stylesheet" href="classificação.css">
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

<h1>Classificação</h1>

<div class="rank">
<?php

$pontuacao = [];

// TURMAS
$arquivoTurmas = fopen("turmas.txt", "r");
while (!feof($arquivoTurmas)) {
    $linha = trim(fgets($arquivoTurmas));
    if ($linha != "") {
        $pontuacao[$linha] = 0;
    }
}
fclose($arquivoTurmas);

// JOGOS
$arquivoJogos = fopen("jogos.txt", "r");
while (!feof($arquivoJogos)) {
    $linha = trim(fgets($arquivoJogos));

    if ($linha != "") {
        $dados = explode("|", $linha);
        $vencedor = $dados[3];

        if (isset($pontuacao[$vencedor])) {
            $pontuacao[$vencedor]++;
        }
    }
}
fclose($arquivoJogos);

arsort($pontuacao);

foreach ($pontuacao as $turma => $pontos) {
    echo "<p>$turma - $pontos pontos</p>";
}

?>
</div>

<h2>Tabela de Jogos</h2>

<div class="tabela">

<h3>Bloco 1</h3>
<table>
<tr><th>Turma 1</th><th>Turma 2</th><th>Horário</th></tr>
<tr><td>9º ANO</td><td>3º EM</td><td>07:10</td></tr>
<tr><td>1º EM</td><td>2º EM</td><td>07:25</td></tr>
<tr><td>9º ANO</td><td>2º EM</td><td>07:40</td></tr>
<tr><td>3º EM</td><td>1º EM</td><td>07:55</td></tr>
<tr><td>9º ANO</td><td>1º EM</td><td>08:10</td></tr>
<tr><td>2º EM</td><td>3º EM</td><td>08:25</td></tr>
</table>

<p><b>Modalidades:</b> Vôlei | Pebolim | Cabo de guerra</p>

<h3>Bloco 2</h3>
<table>
<tr><th>Turma 1</th><th>Turma 2</th><th>Horário</th></tr>
<tr><td>9º ANO</td><td>3º EM</td><td>08:40</td></tr>
<tr><td>1º EM</td><td>2º EM</td><td>08:55</td></tr>
<tr><td>9º ANO</td><td>2º EM</td><td>09:10</td></tr>
<tr><td>3º EM</td><td>1º EM</td><td>09:25</td></tr>
<tr><td>9º ANO</td><td>1º EM</td><td>10:00</td></tr>
<tr><td>2º EM</td><td>3º EM</td><td>10:15</td></tr>
</table>

<p><b>Modalidades:</b> Penalidades | Tênis de mesa | Embaixadinha</p>

<h3>Bloco 3</h3>
<table>
<tr><th>Turma 1</th><th>Turma 2</th><th>Horário</th></tr>
<tr><td>9º ANO</td><td>3º EM</td><td>10:30</td></tr>
<tr><td>1º EM</td><td>2º EM</td><td>10:45</td></tr>
<tr><td>9º ANO</td><td>2º EM</td><td>11:00</td></tr>
<tr><td>3º EM</td><td>1º EM</td><td>11:15</td></tr>
<tr><td>9º ANO</td><td>1º EM</td><td>11:30</td></tr>
<tr><td>2º EM</td><td>3º EM</td><td>11:45</td></tr>
</table>

<p><b>Modalidades:</b> Campo minado | Lance livre | Queimada</p>

</div>

</main>

<footer>
    <p>© Gincana SENAI 2026 | Todos os direitos reservados</p>
</footer>

</body>
</html>