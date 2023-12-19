<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $peso1 = $_GET['peso1'];
        $peso2 = $_GET['peso2'];
    ?>
    <main>
        <h1>Média Aritmédicas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">1º Valor</label>
            <input type="number" name="num1" id="num1" value="<?= $num1 ?>">
            
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">
            
            <label for="num2">2º Valor</label>
            <input type="number" name="num2" id="num2" value="<?= $num2 ?>">
            
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h1>Resultado</h1>
            
            <?php 
                $media = ($num1 + $num2)/2;
                $medArit = (($num1 + $peso1) + ($num2 + $peso2)) / ($peso1 + $peso2);
                
                echo "A média aritmédica de $num1 e $num2 é de <strong>".number_format($media,2,",",".")."</strong>";
                echo"<br>";
                echo "A média Ponderada de $num1 e $num2 é de <strong>".number_format($medArit,2,",",".")."</strong>";
                
            ?>
        </section>
    </main>
</body>
</html>