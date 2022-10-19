<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiek</title>
</head>
<body>
    <?php 
    $wiek = rand (0, 100);
    ?>
    <h1 style="border: solid 2px black;"><?php
    echo "Mam ".$wiek." lat."; 
    ?></h1>
    <h2 style="border: dotted 2px navy;"><?php 
    if ($wiek < 18 ) {
        echo "Jeszcze nie możesz głosować.";
    }
    elseif ($wiek <= 21) {
        echo "Możesz tylko głosować.";
    }
    elseif ($wiek <= 30) {
        echo "Możesz głosować i kandydować do Sejmu.";
    }
    elseif ($wiek < 35) {
        echo "Możesz głosować i kandydować do Sejmu i Senatu.";
    }
    elseif ($wiek >= 35) {
        echo "Możesz głosować i kandydowac do Sejmu, Senatu oraz na Prezydenta.";
    }


    ?></h2>
</body>
</html>