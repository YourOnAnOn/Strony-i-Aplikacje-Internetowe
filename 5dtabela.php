<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td, tr {
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "user", "password", "uwu1");
    if(!$conn){
        die("Błąd: ".mysqli_connect_error());
    }
    #tabelka +sql start
    $sql = "SELECT * FROM czytelnicy";
    $result = mysqli_query($conn, $sql);
    echo "<table>";
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