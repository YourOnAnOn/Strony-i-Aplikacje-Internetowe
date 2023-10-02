<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="tabelka.css">
    <style>
        table, th, td, tr {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="div1">
        <div class="option"><a href="index.php">Strona główna</a></div>
        <div class="option"><a href="test.php">Test połączenia</a></div>
        <div class="option"><a href="lista.php">Lista tabel</a></div>
        <div class="option"><a href="5dtabela.php">Tabela czytenicy</a></div>
        <div class="option"><a href="5dtabela2.php">Tabela działy</a></div>
        <div class="option"><a href="5dtabela3.php">Tabela książki</a></div>
        <div class="option"><a href="5dtabela4.php">Tabela pracownicy</a></div>
        <div class="option"><a href="5dtabela5.php">Tabela stanowiska</a></div>
        <div class="option"><a href="5dtabela6.php">Tabela wypożyczenia</a></div>
    </div>
    <h1>Tabela czytelnicy</h1>
    <?php 
    $conn = mysqli_connect("localhost", "user", "password", "raus1");
    if(!$conn){
        die("Błąd: ".mysqli_connect_error());
    }
    #tabelka +sql start
    echo "<table class='tabeleczka'>";
    $sql = "SELECT * FROM czytelnicy";
    $result = mysqli_query($conn, $sql);
    echo "<p class='nocnocnoc'>Zawiera ".mysqli_num_rows($result)." wierszy</p>";
    echo "<tr>";
    echo "<th>Nr_czytelnika</th><th>Nazwisko</th><th>Imie</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th><th>Data_skreslenia</th><th>Nr_legitymacji</th><th>Funkcja</th><th>Plec</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['Nr_czytelnika']."</td><td>".$row['Nazwisko']."</td><td>".$row['Imie']."</td><td>".$row['Data_ur']."</td><td>".$row['Ulica']."</td><td>".$row['Kod']."</td>"."<td>".$row['Miasto']."</td>"."<td>".$row['Data_zapisania']."</td>"."<td>".$row['Data_skreslenia']."</td>"."<td>".$row['Nr_legitymacji']."</td>"."<td>".$row['Funkcja']."</td>"."<td>".$row['Plec']."</td>"."</tr>";
    }
    echo "</table>";
    #tabelka end
    ?>
</body>
</html>