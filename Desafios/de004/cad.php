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
            $numero = $_GET["numero"] ?? "Sem numero";
            $dola = 4.87;
            $convert = $numero / $dola;
            
            echo "<h1>Conversor de moedas v1.0</h1>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY );
            echo "<p>Seus ". numfmt_format_currency($padrao, $numero ,"BRL") ."equivalem a <strong>" . numfmt_format_currency($padrao, $convert ,"USD") ."</strong></p>";
            echo "<p><strong>A Cotação fixa de". numfmt_format_currency($padrao, $dola,"USD")."</p>"

         ?>
         <button type="button"><a href="javascript:history.go(-1)">⬅Voltar </a></button>
    </main>
</body>
</html>