<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 4;
        $c = 7;
        $a2 = number_format($a, 2, ',');
        $b2 = number_format($b, 2, ',');
        $c2 = number_format($c, 2, ',');
        $delta = $b*$b-4*($a*$c);
        $delta2 = number_format($delta, 2, ',');
        

        if($delta>0){
        $x1 = -1*$b-sqrt($delta)/2*$a;
        $x2 = -1*$b+sqrt($delta)/2*$a;

        $x1 = number_format($x1, 2, ',');
        $x2 = number_format($x2, 2, ',');
        print "a: $a2<br>b: $b2<br>c: $c2<br>";

        print "delta: $delta2<br>pierwiastki: x1= $x1 , x2 = $x2";
        }else if($delta==0){
            $x0 = -1*$b/2*$a;
            $x0 = number_format($x0, 2, ',');
            print "a: $a2<br>b: $b2<br>c: $c2<br>";
            print "delta: $delta2<br>";
            print "Jedno miejsce zerowe x0 =  $x0";
        }
        else{
            print "a: $a2<br>b: $b2<br>c: $c2<br>";
            print "delta: $delta2<br>";
            print "brak miejsc zerowych!<br>Delta mniejsza niz 0";
        }
    ?>
</body>
</html>