<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
    height: 50px;
}

    </style>
</head>
<body>
    <!--
        1min:60s
        1horas:3600s
        1dia:86400s
        1semana:604800s 
    -->

    <?php 
        $saque = $_REQUEST['saque'] ?? '0';
        $sobra = $saque;
        
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Quanto que você deseja sacar:</label>
            <input type="number" name="saque" id="saque" value="<?= $saque ?>" min="0" >
            
      
            
            <input type="submit" value="calcular">
        </form>
    </main>
            <?php 
               
                            
                $cem = (int)($sobra / 100);
                $sobra = $sobra % 100;

                $cinquenta = (int)($sobra / 50);
                $sobra = $sobra % 50;
              
                $vinte = (int)($sobra / 20);
                $sobra = $sobra % 20;
                
                $dez = (int)($sobra / 10);
                $sobra = $sobra % 10;

                $cinco = (int)($sobra / 5);
                $sobra = $sobra % 5;
                
                $dois = (int)($sobra / 2);
                $sobra = $sobra % 2;

                $um =  $sobra

            ?>
           
        <section>
            <h2>Saque de R$ <?=$saque ?></h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
           <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota">x <?=$cem ?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota">x <?=$cinquenta ?></li>
            <li><img src="imagens/20-reais.jpg" alt="nota de 20" class="nota">x <?=$vinte ?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota">x <?=$dez ?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota">x <?=$cinco ?></li>
            <li><img src="imagens/2-reais.jpg" alt="nota de 5" class="nota">x <?=$dois ?></li>
            <li><img src="imagens/1-real.jpg" alt="moeda de 1" class="nota">x <?=$um ?></li>
           </ul>
                
        </section>


</body>
</html>