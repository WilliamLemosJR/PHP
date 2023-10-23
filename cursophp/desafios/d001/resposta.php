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
        <h1>
            Resultado Final
        </h1>

        <p>
            <?php 
                $numero = $_GET["num"] ?? 0 ;

                $antecessor= $numero - 1;

                $sucessor =  $numero + 1;

                echo "O número ecolhido foi $numero";

                echo "<br> O seu antecessor é $antecessor";

                echo "<br> O seu sucessor é $sucessor";
            ?>
        </p>

        <button onclick="javascript:window.location.href='index.html'">
            Voltar
        </button>
   </main>
</body>
</html>