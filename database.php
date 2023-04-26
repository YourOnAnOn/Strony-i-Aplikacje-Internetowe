<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
    border: 1px black solid;
    border-collapse: collapse; 
}
    </style>
</head>
<body>
    <h1>Wynik zapytania w tabeli HTML:</h1><br>
    <table>
    <?php 
        $servername = "localhost";
        $username = 'RAUS';
        $password = 'kacperraus';
        $dabname = 'kacper_raus';
        $conn = new mysqli($servername, $username, $password, $dabname);
        if ($conn->connect_error) {
            die("Error 403 - moeda sie: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM `czytelnicy`";
        $result = $conn->query($sql);
        echo '<tr><th>Nr_czytelnika</th><th>Imie i Nazwisko</th></tr>';
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Nr_czytelnika"]. "</td><td>" . $row["Imie"]. " " . $row["Nazwisko"]."</td><tr>";
            }
        } else {
            echo "0 wyników";
        }
        $conn->close();
    ?>
    </table>
</body>
</html>