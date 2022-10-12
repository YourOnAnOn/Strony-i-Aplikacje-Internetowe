<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals.php</title>
</head>
<body>
    <?php 
        $losowa = rand (0, 30);
        if ($losowa >= 20)
        echo "Wylosowana liczba jest większa bądź równa 20. "."<br>";
    ?>
</body>
</html>