<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops 3</title>
    <link rel="stylesheet" href="loops3.css">
</head>
<body>
<table>
        <?php 
        $jeden = 1;
        while ($jeden <= 5){
            echo "<tr><td>To jest wiersz numer ".$jeden++."</td></tr>";
        }    
        ?>
</table>
</body>
</html>