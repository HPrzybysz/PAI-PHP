<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $przedmioty=["polski","angielski","PAI","TAI","historia"];
    for($i=0;$i<sizeof($przedmioty);$i++){
        print $przedmioty[$i].", ";
    }
    print "<br><hr><br>";
    foreach ($przedmioty as $przedmiot) {
        print $przedmiot.", ";
    }
    print "<br><hr><br>";
    print_r($przedmioty);
    ?>
</body>
</html>