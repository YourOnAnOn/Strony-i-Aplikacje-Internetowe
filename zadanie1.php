<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
    <style>
        .a1 {
            font-style: italic;
        }
        .a2 {
            font-weight: bold;
        }
        adwa {
            /* podkreślenie: */
            border-bottom: 1px solid black;
        }
        /* lista z kwadratami??? */
        li{
            list-style-type: square;
        }
    </style>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "Raus", "5meMii@*h-Idkr1V", "raus"); 
        if(!$conn){
            die("Błąd połączenia: ".mysqli_connect_error());
        }
        $sql = "SELECT * FROM ksiazki WHERE Objetosc_ks < 300 ORDER BY Objetosc_ks ASC";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<li>"."<ajeden class='a1'>".$row['Tytul']."</ajeden>, autor <b class='a2'>".$row["Imie"].' '.$row['Nazwisko']."</b>".
            ", "."<adwa>".$row['Objetosc_ks']."</adwa>"." stron, wydawnictwo<br>".$row["Wydawnictwo"]." (".$row["Rok_wyd"]." r.), ".
            "sygnatura = ".$row["Sygnatura"].", cena: ".$row["Cena"]." zł</li><br>";
        }
        $conn->close();
        
    ?>
</body>
</html>