<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            font-style: bold;
            float: center;
        }
        .amongus {
            text-align: center;
        }
        .amongus2{
            text-align: right;
        }

    </style>
</head>
<body>
    <table style="border: 1px solid black">
        <?php 
            $conn = mysqli_connect("localhost", "Raus", "5meMii@*h-Idkr1V", "raus");
            if(!$conn){
                die("Błąd połączenia: ".mysqli_connect_error());
            }
            $sql = "SELECT * FROM pracownicy WHERE id_stanowisko = 2 AND Wynagrodzenie > 2000 ORDER BY Wynagrodzenie DESC";
            $result = mysqli_query($conn, $sql);
            echo "<tr><th>Pracownik</th><th>Miasto</th><th>Data zatrudnienia</th><th>Wynagrodzenie</th></tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['Imie'].' '.$row['Nazwisko']."</td><td class='amongus'>".$row['Miasto']."</td><td class='amongus2'>".$row['Data_zatrudnienia']."</td><td class='amongus2'>".$row['Wynagrodzenie']."</td></tr>";
            }

        ?>
    </table>
</body>
</html>