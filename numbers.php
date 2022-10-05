<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        echo "<hr>";
        echo "---ZADANIE NUMER 2---<br><br>";
        $x = 5;
        $y = 15;
        echo "Wynik odejmowania ".$x." i ".$y." wynosi ".$x - $y.".<br>";
        echo "Wynik dodawania ".$x." i ".$y." wynosi ".$x + $y.".<br>";
        echo "Wynik mnożenia ".$x." i ".$y." wynosi ".$x * $y.".<br>";
        echo "Wynik dzielenia ".$x." i ".$y." wynosi ".$x / $y.".<br>";
        echo "Wynik reszty z dzielenia ".$x." i ".$y." wynosi ".$x % $y.".<br>";
        echo "<br>";
        $bok1 = 4;
        $bok2 = 35;
        echo "Pole prostokąta o bokach długości ".$bok1." i ".$bok2." wynosi ".$bok1 * $bok2." j<sup>2</sup>.<br>";
        echo "Obwód prostokąta o bokach długości ".$bok1." i ".$bok2." wynosi ".$bok1 * 2 + $bok2 * 2,".";
        echo "<hr>";
        echo "<br>";
        echo "---ZADANIE NUMER 3---<br><br>";
    ?>
    
    <p>    <?php
        $valuetoup = 0.01; 
        $jeden = -5;
        echo (abs($jeden));?></p>
        <p> <?php echo min(0, 150, 30, 20, -8, -200);?></p>
        <p> <?php echo pi();?></p>
        <p> <?php echo "Funkcja round dla liczby 3.4 zwraca wynik: "; echo (round(3.4));?></p>
        <p> <?php echo "Funkcja round dla liczby 3.6 zwraca wynik: "; echo (round(3.6));?></p>
        <p> <?php echo "Funkcja round dla liczby 5.055zwraca wynik: "; echo (round(5.055, 2));?></p>
        <p> <?php echo "Funkcja round dla liczby 5.054 zwraca wynik: "; echo (round(5.045, 2));?></p>
        <p><?php echo "Funkcja rand dla liczb z przedziału od 900 do 1000 zwraca wynik: "; echo rand(900, 1000);   ?></p>
        <p><?php echo "Funkcja sqrt dla liczby 0 zwraca wynik: "; echo sqrt(0);   ?></p>
        <p><?php echo "Funkcja sqrt dla liczby 25 zwraca wynik: "; echo sqrt(25);   ?></p>
        <p><?php echo "Funkcja sqrt dla liczby 64 zwraca wynik: "; echo sqrt(64);   ?></p>
        <p><?php echo "Funkcja sqrt dla liczby 65535 zwraca wynik: "; echo sqrt(65535);   ?></p>
        
    </p>
</body>
</html>