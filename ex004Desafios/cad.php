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
        
        <?php 
            $numero = $_GET["num"] ?? 0;
            //$ante = $numero -1;
            //$depo = $numero +1;
            echo "<p>O numero escolhido foi <strong> $numero </strong></p>";
            echo "<p>O numero Antecessor é  ". ($numero-1) ."</p>";
            echo "<p>O numero Sucessor foi ". ($numero+1) ."</p>";
                       
         ?>
        <!--<button type="button"><a href="javascript:history.go(-1)">⬅Voltar </a></button> -->
         <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>
</body>
</html>