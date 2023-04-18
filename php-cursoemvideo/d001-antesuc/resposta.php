<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <main>
            <h1>Resultado Final</h1>
            <?php 
                $numero = $_GET["numero"];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi <strong>$numero</strong>";
                echo "<br>O seu <em>antecessor</em> é $antecessor";
                echo "<br>O seu <em>sucessor</em> é $sucessor";
            ?> 
            <br><br>
            <a href="http://localhost/php-study/php-cursoemvideo/d001-antesuc/"><input type="button" value="⬅ Voltar"></a>
        </main>
</body>
</html>