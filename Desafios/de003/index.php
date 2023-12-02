<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       
    </header>
    <main>
        <!-- Gerador de numero automatico-->
        <?php 
            $numero = mt_rand(1,100);
            echo "<p>Gere um numero entre ,<strong> 1 e 100</strong></p>";
            echo "<p>O numero escolhido foi ,<strong> $numero </strong></p>";
                       
         ?>
         <button type="button" action="cad.php"><a href="JavaScript:location.reload(true)">🔃Gerar um novo numero </a></button>
    </main>
</body>
</html>