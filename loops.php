<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <ol style="margin-left: 40px; list-style-type: upper-roman;">
    <?php
    $jeden = 1;
    for ($jeden; $jeden <= 100; $jeden++ ) {
        echo "<li>To jest element: ".$jeden." listy. </li><br>";
    };
    ?></ol>
</body>
</html>