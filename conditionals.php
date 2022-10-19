<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals.php</title>
</head>
<body>
    <h2 style="color: darkorchid; text-align: center;"> 
    <?php 
    $losowa = rand (0, 30);
        echo "Liczba jest równa: ".$losowa."<br>"; ?>
    </h2>
    <?php 
        if ($losowa >= 20) {
        echo "Wylosowana liczba jest większa bądź równa 20. "."<br>";
    }
    ?>
    <h4 style="color: navy; text-align: center;"><?php 
        if ($losowa % 2==0) {
            echo "Libcza jest parzysta. <br>";
        }
        else {
            echo "Liczba nie jest parzysta. <br>";
        }
    ?></h4>
    <h4 style="color: deepink; text-align:center;">
    <?php 
        if ($losowa >= 10) {
            echo "Druga dziesiątka";
        }  
        elseif ($losowa >= 20) {
            echo "Trzecia diesiątka";
        }
        else {
            echo "Pierwsza Dziesiątka";
        }
    ?>
    </h4>
    <br>
    <hr>
    <br>
    <h1 style="border: 4px solid red; text-align: center;">
    <?php 
    $miesiac = rand(1, 15);
    echo $miesiac;
    ?>
    </h1>
    <h3 style="border-top-style:dashed; border-top-width:2px; border-top-color: pink; border-bottom-style: dashed; border-bottom-color: pink; border-bottom-width: 2px; font-family: cursive; text-align: center;"> 
        <?php 
            switch ($miesiac) {
                case 1:
                    echo "I kwartał";
                    break;
                case 2:
                    echo "I kwartał";
                    break;
                case 3:
                    echo "I kwartał";
                    break;
                case 4:
                    echo "II kwartał";
                    break;
                case 5:
                    echo "II kwartał";
                    break;
                case 6:
                    echo "II kwartał";
                    break;
                case 7:
                    echo "III kwartał";
                    break;
                case 8:
                    echo "III kwartał";
                    break;
                case 9:
                    echo "III kwartał";
                    break;
                case 10:
                    echo "IV kwartał";
                    break;
                case 11:
                    echo "IV kwartał";
                    break;
                case 12:
                    echo "IV kwartał";
                    break;
                case 13:
                    echo "Błędny numer miesiąca";
                    break;
                case 14:
                    echo "Błędny numer miesiąca";
                    break;
                case 15:
                    echo "Błędny numer miesiąca";
                    break;
                    
            }
        ?>
    </h3>
</body>
</html>