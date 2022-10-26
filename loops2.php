<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loops2.css">
</head>
<body>
    <?php 
    $tekst = "Kon'nichiwa sekai";
    $dwa = str_split($tekst);
    echo "<table><tr>";
    foreach ($dwa as $tekst ) {
        echo "<td>".$tekst."</td>";
    }
    echo "</tr></table>";
    ?>
    
</body>
</html>