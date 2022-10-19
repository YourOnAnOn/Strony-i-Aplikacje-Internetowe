<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings.php</title>
</head>
<body>
    <?php 
        $lenght = 37; /* tutaj zdefiniowałem zmenną intiger o wartości 37 */
        $pad_string = "-_-"; #Zmienna varchar o wartości "-_-"
        $findme = "to"; 
        /* Tutaj zdefinowałem wartość "to", jest to wartość typu varchar.
        Tę wartość użyję przy użyciu funkcji strpos która wskazuje pozycje wybranego tekstu w tekście */
        define ("DOBRA_RADA" , "Bez chleba, to sie nie najesz."); #nowa zmienna - definiuje zmienną DOBRA_RADA
        echo DOBRA_RADA."<br>"; #po każdej linijce kodu daję <br> żeby ładnie wyglądało na stronie
        echo strlen(DOBRA_RADA)."<br>"; #W tej linijce wyświetla się długość zdania
        echo str_word_count (DOBRA_RADA)."<br>"; # w tej linijce liczba słów
        echo strrev (DOBRA_RADA)."<br>"; #w tej linijce tekst jest napisany od tyłu
        echo strpos (DOBRA_RADA, $findme)."<br>"; 
        echo str_replace (DOBRA_RADA, "chleba", "mięsa")."<br>";
        echo strtolower (DOBRA_RADA)."<br>";
        echo strtoupper (DOBRA_RADA)."<br>";
        echo ucwords (DOBRA_RADA)."<br>";
        echo trim (DOBRA_RADA)."<br>";
        echo strstr (DOBRA_RADA, "nie")."<br>";
        echo str_pad (DOBRA_RADA, $lenght, $pad_string)

    ?>
</body>
</html>