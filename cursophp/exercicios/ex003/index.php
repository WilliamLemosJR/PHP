<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>

<h1>
    Teste de tipos primitivos
</h1>
    <?php 
        $numero=300;

        echo "O Valor da variável é $numero <br>";


        $numero2=0x1A;

        echo " O valor da variável é $numero2 <br> ";

        $numero3=0b1010;

        echo " O Valor da variável é $numero3 <br>";

        $numero4=3e2;

        echo " O Valor da variável é $numero4 <br>";


        $v=300;

        var_dump($v);

        $v2=10.5;

        var_dump($v2);

        $v3=true;

        var_dump($v3);

        $v4="william";

        var_dump($v4);



    ?>
</body>
</html>