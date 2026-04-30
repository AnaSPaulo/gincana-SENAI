<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação</title>
    <link rel="stylesheet" href="classificacao.css">
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
    <h1>Classificação</h1>

    <div class="rank">
        <?php

        $pontuacao = [];

        $arquivoTurmas = fopen("turmas.txt", "r");
        while (!feof($arquivoTurmas)) {
            $linha = trim(fgets($arquivoTurmas));
            if ($linha != "") {
                $pontuacao[$linha] = 0;
            }
        }
        fclose($arquivoTurmas);

        $arquivoJogos = fopen("jogos.txt", "r");
        while (!feof($arquivoJogos)) {
            $linha = trim(fgets($arquivoJogos));

            if ($linha != "") {
                $dados = explode("|", $linha);
                $vencedor = $dados[3];

                if (isset($pontuacao[$vencedor])) {
                    $pontuacao[$vencedor] += 1;
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
</main>

<footer>
    <p>© 2026 Gincana SENAI</p>
</footer>

</body>
</html>