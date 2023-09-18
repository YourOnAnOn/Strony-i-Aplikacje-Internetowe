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
    $sql = "SELECT * FROM dzialy";
    $result = mysqli_query($conn, $sql);
    echo "<form action='edit.php' method='POST'>";
    echo "<select name='dzialy' class='selekt'>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<option name='id' id='id' value='".$row['Id_dzial']."'>".$row['Nazwa']."</option>";
    }
    echo "</select>";
    echo "<input type='text' name='nazwa' placeholder='Nazwa dzialu'>";
    echo "<input type='submit' value='Zmień'>";
    echo "</form>";
    if (isset($_POST['nazwa'])){
        $nazwa = $_POST['nazwa'];
        $id = $_POST['dzialy'];
        $sql = "UPDATE dzialy SET Nazwa='$nazwa' WHERE Id_dzial='$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: 5dtabela2.php");
    }
    ?>
    </table>
</body>
</html>