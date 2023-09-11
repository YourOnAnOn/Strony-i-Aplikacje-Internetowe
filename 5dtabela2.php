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
    <h1>Tabela działy</h1>
    <?php 
    $conn = mysqli_connect("localhost", "user", "password", "uwu1");
    if(!$conn){
        die("Błąd: ".mysqli_connect_error());
    }
    #tabelka +sql start
    echo "<table class='tabeleczka'>";
    $sql = "SELECT * FROM dzialy";
    $result = mysqli_query($conn, $sql);
    echo "<p class='nocnocnoc'>Zawiera ".mysqli_num_rows($result)." wierszy</p>";

    echo "<tr>";
    echo "<th>Id_dzial</th><th>Nazwa</th><th><a class='add' href='dzialy_dodaj.php'>&#10010;</a></th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['Id_dzial']."</td><td>".$row['Nazwa']."</td><td><a>Edytuj</a></td></tr>";
    }
    echo "</table>";
    #tabelka end
    ?>
</body>
</html>