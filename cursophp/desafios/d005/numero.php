<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>

        <?php 
            $numero = $_POST["numero"];

            echo " <p> Analisando o número ". number_format($numero , 3 , "," , ".")."  informado pelo usuário: </p>";

            $inteira = (int) $numero ;
            $fracionaria = $numero - $inteira ;

            echo "<ul><li> A parte inteiro do número é ".number_format($inteira , 0 , ",",".")." </li>";
            echo "<li> A parte fracionária do número é ".number_format($fracionaria,3,"," , ".")."</li></ul>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">
            Voltar
        </button>
    </main>
</body>
</html>