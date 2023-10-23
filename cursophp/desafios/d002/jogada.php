<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resoltado da partida</h1>

        <?php
    // Verifica se o jogador fez uma escolha
    if (isset($_POST['escolha'])) {
        $opcoes = array("pedra", "papel", "tesoura");
        $escolha_jogador = $_POST['escolha'];
        $escolha_computador = $opcoes[array_rand($opcoes)]; //Escolha aleatória do computador

        echo "Você escolheu: $escolha_jogador<br>";
        echo "O computador escolheu: $escolha_computador<br>";

        // Determina o vencedor
        if ($escolha_jogador == $escolha_computador) {
            echo "Empate!";
        } elseif (
            ($escolha_jogador == "pedra" && $escolha_computador == "tesoura") ||
            ($escolha_jogador == "papel" && $escolha_computador == "pedra") ||
            ($escolha_jogador == "tesoura" && $escolha_computador == "papel")
        ) {
            echo "Você venceu!";
        } else {
            echo "O computador venceu!";
        }
    }
    ?>

     <button onclick="javascript:window.location.href='index.html'">
            Voltar
        </button>
    </main>
</body>
</html>