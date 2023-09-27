<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $NumEur = 100;
        $NumPln = 140;
        $exchangePlnEur = 0.22;
        $exchangeEurPln = 4.65;
        $a = $NumEur*$exchangeEurPln;
        $b = $NumPln*$exchangePlnEur;

        echo "Kurs Euro względem PLN: "; echo number_format($exchangeEurPln, 2,','); echo "PLN";
        echo "<br>";
        echo "Kurs PLN względem Euro: "; echo number_format($exchangePlnEur, 2,','); echo "€ <br>";

        echo "Za $NumEur € otrzymasz: "; echo number_format($a, 2, ','); echo "PLN";
        echo "<br>Za $NumPln PLN otrzymasz: "; echo number_format($b, 2, ','); echo "€";
    ?>
</body>
</html>