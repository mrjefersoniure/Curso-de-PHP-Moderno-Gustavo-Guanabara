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
        $total = $_REQUEST['time'] ?? '0';
        $sobra = $total;
        
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="time">Digite uma quantia em Segundos</label>
            <input type="number" name="time" id="time" value="<?= $total ?>" min="0" >
            
      
            
            <input type="submit" value="calcular">
        </form>
    </main>
            <?php 
                //semana                
                $semana = (int)($sobra / 604_800);
                $sobra = $sobra % 604_800;
                //dia
                $dia = (int)($sobra / 86_400);
                $sobra = $sobra % 86_400;
                //hora
                $hora = (int)($sobra / 3_600);
                $sobra = $sobra % 3_600;
                //minuros
                $min = (int)($sobra / 60);
                $sobra = $sobra % 60;
                //segundos
                $seg =  $sobra

            ?>
           
        <section>
            <h1>Resultado</h1>
            <?php 
                echo"Analisando o valor que você digitou <strong>$total</strong> de segundos equivalem a:<br>
                <ul>
                <li><strong>$semana</strong> semanas</li>
                <li> <strong>$dia</strong> dias</li>
                <li><strong>$hora</strong> horas</li>
                <li><strong>$min</strong> minutos</li>
                <li><strong>$seg</strong> segundos </li>
            </ul>";
            ?>
                
        </section>


</body>
</html>