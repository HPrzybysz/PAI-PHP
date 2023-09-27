<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $width = 10.50;
        $height = 7;
        $circumfrence = 2*$width + 2*$height;
        $Area = $width * $height;
        $circumfrence2 = number_format((float)$circumfrence, 2, ',', '.');
        $Area2 = number_format((float)$Area, 1, ',', '.');

        echo "Boki <br> a: $width<br> b: $height <br>";
        echo "Obwód: <b>$circumfrence2</b>";
        echo "<br> Area: <b>$Area2</b>";

    ?>
</body>
</html>