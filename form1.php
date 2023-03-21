<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
<form action="$_SERVER" method="post">
<label>Ankieta</label><br>
<label>Imię:</label><br>
<input type="text" name="imie" value="<?php echo $_POST['imie'] ?? '' ?>"><br>
<label>Nazwisko:</label><br>
<input type="text" name="nazwisko" value="<?php echo $_POST['nazwisko'] ?? '' ?>"><br>
<label>Wybierz jedną opcję:</label><br>
<input type="radio" name="uczeń"><label>uczeń</label><br>
<input type="radio" name="absolwent"><label>absolwent</label><br>
<input type="radio" name="nauczyciel"><label>nauczyciel</label><br>
<input type="radio" name="pracownik"><label>pracownik administracji</label><br>
<input type="button" value="wyslij" action="submit"><br>
<?php 
    
?>
</form>
</fieldset>
</body>
</html>