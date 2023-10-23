<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>

        <?php 
            $cotacao =5.01;

            $real = $_GET["dinheiro"] ?? 0;

            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt-BR" , NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao , $real , "BRL") . " equivalem a " . numfmt_format_currency($padrao , $dolar , "USD");
        ?>

            <button onclick="javascript:window.location.href='index.html'">
            Voltar
            </button>
    </main>
</body>
</html>