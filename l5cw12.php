<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<br><hr><br>";
    $szkoła =array(
        "Polski"=>"3,72",
        "Niemiecki"=>"4,76",
        "PAI"=>"5,32",
        "TAI"=>"5,00",
        "WF"=>"5,45"
    );

    foreach($szkoła as $przedmiot=>$ocena){
        echo $przedmiot.": ".$ocena."<br>";
    }
    print "<br><hr><br>";
    print_r($szkoła);
    print "<br><hr><br>";
    ?>
</body>
</html>