<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['d1'] ?? 0;
        $salminimo = 1320.64;
    ?>
    <main>

        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <label for="d1">Salário</label>
          <input type="number" name="d1" id="d1" min="0" value="<?= $dividendo ?>" step="0.01">
          <p>Considerando que o Salário minimo é <strong>R$<?= number_format($salario,2 , ",", ".")?></strong></p>
          <input type="submit" value="Calcular">
        </form>
    
    </main>
    <section>
        <h2>Resultado seu salário</h2>
        <?php 
        //Calclos
            $divsal= intdiv($salario,$salminimo);
            $saldif = ($salario % $salminimo);
            $format = number_format($saldif,2 , ",", ".");
            echo "Quem ganha <strong>$salario</strong> por mês, ganha um total de <strong>$divsal salários</strong> minimos e + <strong>R$ $format reais </strong>.";
        ?>

        
</section>
    
</body>
</html>