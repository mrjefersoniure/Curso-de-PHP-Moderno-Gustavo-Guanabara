<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $date = $_GET['date'] ?? date("Y");
        $num1 = $_GET['num1'] ?? $date-1;
        
        
    ?>
    <main>
        <h1>Calcular Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Data de Nascimento</label>
            <input type="number" name="num1" id="num1" value="<?= $num1 ?>">
            
            <label for="data">Data Atual</label>
            <input type="number" name="date" id="date" min="1900" value="<?= $date ?>">
            
            
            <input type="submit" value="Qual será minha idade?">
        </form>

        <section>
            <h1>Resultado</h1>
            
            <?php 
                $idade = $date - $num1;
                
               echo "A sua Idade é <strong>$idade</strong> anos em $date";
                
            ?>
        </section>
    </main>
</body>
</html>