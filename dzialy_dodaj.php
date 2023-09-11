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
    <h1>Nowe dane tabeli działy</h1>
    <table class="tabeleleleczka">
    <?php 
    $conn = mysqli_connect("localhost", "user", "password", "uwu1");
    if(!$conn){
        die("Błąd: ".mysqli_connect_error());
    }
    $sql = "INSERT INTO dzialy (Id_dzial, Nazwa) VALUES (NULL, 'nazwa')";
    echo "<form action='dzialy_dodaj.php' method='POST'>";
    echo "<tr><td><input type='text' name='nazwa' placeholder='Nazwa dzialu'></td></tr>";
    echo "<tr><td><input type='submit' value='Dodaj'></td></tr>";
    echo "</form>";
    if(isset($_POST['nazwa'])){
        $sql = "INSERT INTO dzialy (Id_dzial, Nazwa) VALUES (NULL, '".$_POST['nazwa']."')";
        mysqli_query($conn, $sql);
        header("Location: dzialy_dodaj.php");
    }

    ?>
    </table>
</body>
</html>