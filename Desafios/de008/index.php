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
        $num = $_GET['num'] ?? 0;
        $raiz2 = $num **(1/2);
        $raiz3 = $num **(1/3);
    ?>
    <main>

        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <label for="num">Número</label>
          <input type="number" name="num" id="num" value="<?= $num ?>" placeholder="Digite um número">
          <input type="submit" value="Calcular Raízes">
        </form>
    
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        
            echo "Raiz quadrada de <strong>$num é ".number_format($raiz2, 2, ",",".")."</strong>";
            echo"<br>";
            echo "Raiz cubica de<strong> $num é " .number_format($raiz3, 2, ",",".")."</strong>";    
        ?>

        
</section>
    
</body>
</html>