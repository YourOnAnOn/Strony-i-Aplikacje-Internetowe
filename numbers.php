<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $intiger1 = 57; //zmienne
        $intiger2 = 100;
        $float1 = 21.37;
        $float2 = 7.5;
        $dodaj = "59.85" + 100; 
        echo "Zmienna x ma wartość ".$intiger1." a funkcja is_int zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_int($intiger1));
        echo "<br>";
        echo "Zmienna x ma wartość ".$intiger1." a funkcja is_float zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_float($intiger1));
        echo "<br>";
        echo "Zmienna x ma wartość ".$intiger2." a funkcja is_int zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_int($intiger2));
        echo "<br>";
        echo "Zmienna x ma wartość ".$intiger2." a funkcja is_float zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_float($intiger2));
        echo "<br>";
        echo "Zmienna x ma wartość ".$float1." a funkcja is_int zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_int($float1));
        echo "<br>";
        echo "Zmienna x ma wartość ".$float1." a funkcja is_float zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_float($float1));
        echo "<br>";
        echo "Zmienna x ma wartość ".$float2." a funkcja is_int zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_int($float2));
        echo "<br>";
        echo "Zmienna x ma wartość ".$float2." a funkcja is_float zwraca wynik dla niej: "; //podpunkt 2
        var_dump (is_float($float2));
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Zmienna x ma wartość: ".$dodaj." a funkcja is_numeric zwraca dla niej wynik: "; //podpunkt 3
        var_dump (is_numeric($dodaj));
        echo "<br>";
        echo "Stała PHP_INT_MAX ma wartość: ";
        var_dump(PHP_INT_MAX);
        echo "<br>";
        echo "Stała PHP_INT_MIN ma wartość: ";
        var_dump(PHP_INT_MIN);
        echo "<br>";
        echo "Stała PHP_INT_SIZE ma wartość: ";
        var_dump(PHP_INT_SIZE);
        echo "<br>";
        echo "Stała PHP_FLOAT_MAX ma wartość: ";
        var_dump(PHP_FLOAT_MAX);
        echo "<br>";
        echo "Stała PHP_FLOAT_MIN ma wartość: ";
        var_dump(PHP_FLOAT_MIN);
        echo "<br>";
        echo "Stała PHP_FLOAT_DIG ma wartość: ";
        var_dump(PHP_FLOAT_DIG);
        echo "<br>";
        echo "Stała PHP_FLOAT_EPSILON ma wartość: ";
        var_dump(PHP_FLOAT_EPSILON);
    ?>
</body>
</html>