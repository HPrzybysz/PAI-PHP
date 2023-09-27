<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("PI",3.141592653589793238462643383279502884197169399375105820974944592307816406286208998628034825342117067982);
        $r = 6;
        $h = 9;

        $objetosc = PI*$r*$r*$h/3;
        $objetosc2 = number_format($objetosc, 2, ',','.');
        $r = number_format($r, 2, ',','.');
        $h = number_format($h, 2, ',','.');
        print "<h1>objetosc stozka:</h1><br>
        promien: $r<br>
        wysokosc: $h<br>
        objetosc: $objetosc2";

    ?>
</body>
</html>