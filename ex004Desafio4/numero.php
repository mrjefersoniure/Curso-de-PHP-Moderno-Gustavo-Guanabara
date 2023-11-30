<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de numero Real</h1>
        <?php
        $num = $_POST["n"] ;
        
        echo "<p>Analisando o numero <strong>".number_format($num, 3,",",".")."</strong></p>";

        $int = (int) $num;
        $fra = $num - $int;
        echo "<p>A parte inteira <strong>".number_format($int, 0,",",".")."</strong></p>";
        echo "<p>A parte inteira <strong>".number_format($fra, 3,",",".")."</strong></p>";
        
        ?>
        <button type="button"><a href="javascript:history.go(-1)">⬅Voltar </a></button>
    </main>
    
</body>
</html>