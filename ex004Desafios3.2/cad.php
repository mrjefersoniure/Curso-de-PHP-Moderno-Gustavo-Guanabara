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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            //link da api dolar do banco central
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.($inicio).'\'&@dataFinalCotacao=\''.($fim).'\'&$top=1&$skip=0&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];

           // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY );
           // echo "o valor da cotação é ".numfmt_format_currency($padrao, $cotacao ,"BRL");
           //dados que vem da solicitação  
            $numero = $_GET["numero"] ?? "Sem numero";
           //$dola = 4.87;
            $convert = $numero / $cotacao;
            

            //print do resultado
            echo "<h1>Conversor de moedas v2.0</h1>";
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY );
            echo "<p>Seus ". numfmt_format_currency($padrao, $numero ,"BRL") ."equivalem a <strong>" . numfmt_format_currency($padrao, $convert ,"USD") ."</strong></p>";
            echo "<p><strong>A Cotação fixa de". numfmt_format_currency($padrao,$cotacao,"USD")."</p>"
            
         ?>
         <button type="button"><a href="javascript:history.go(-1)">⬅Voltar </a></button>
    </main>
</body>
</html>