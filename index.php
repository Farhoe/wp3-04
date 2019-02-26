<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Šrouby od matky</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php
    $student [0] ['name'] = "Matěj";
    $student [0] ['potion'] = 10;
    $student [1] ['name'] = "Kristián";
    $student [1] ['potion'] = 9;
    $student [2] ['name'] = "Matěj.K";
    $student [2] ['potion'] = 8;
    
    for ($i=0; $i <= 2; $i++) {
        echo $student [$i] ['name'] ;
        echo "<br>";

        for ($j=0; $j <= $student [$i] ['potion'] ; $j++) {
            echo ".";
            
        }
        
    }
    echo "<br>";
    ?>
</body>
</html>