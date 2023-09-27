<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 3.15;
        $b = 22/7;
        $a2 = number_format($a, 2, ",");
        $b2 = number_format($b, 2, ",");
        print "a: $a2<br>
        b: $b2<br>";

        if($a>$b){
            print "liczba $a2 jest wieksza";
        }
        else if($a<$b){
            print "liczba $b2 jest wieksza";
        }else{
            print "liczby sa równe";
        }
    ?>
</body>
</html>