<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--
        1min:60s
        1horas:3600s
        1dia:86400s
        1semana:604800s 
    -->

    <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $percent = $_REQUEST['percent'] ?? '0';
        
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Data de Nascimento</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" min="0.10" step="0.01">
            
            <label for="percent"> Qual será o percentual de reajuste <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="percent" id="percent" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $percent ?>">
        
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
            <?php 
                
                $aumento = ($preco * $percent) / 100 ;
                $novoVal = $preco + $aumento;
            ?>
        <section>
            <h1>Resultado do reajuste é</h1>
                  
               
               <p>O produto que custava <strong>R$<?=number_format($preco,2 ,",",".")?></strong> com <strong><?=$percent?>%</strong> de aumento vai passar a custar <strong>R$  <?=number_format($novoVal,2 ,",",".")?> </strong> a partir de agora</p>
                
        </section>
        <script>
            mudaValor();
            function mudaValor() {
                p.innerText = percent.value;
            }
        </script>

</body>
</html>