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
        $lenght = 37;
        $pad_string = "-_-";
        $findme = "to";
        define ("DOBRA_RADA" , "Bez chleba, to sie nie najesz.");
        echo DOBRA_RADA."<br>";
        echo strlen(DOBRA_RADA)."<br>";
        echo str_word_count (DOBRA_RADA)."<br>"; 
        echo strrev (DOBRA_RADA)."<br>";
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