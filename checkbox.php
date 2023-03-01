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
        <form action="checkbox.php" method="POST">
    <?php 
        foreach (range(0, 100, 10)as $value){
            echo "<input type='checkbox' id='liczba.$value' name='c1[]' value='$value'>";
            echo "<label for='c1[]'>".$value."</label>";
            $value = $value + 10;
        }
        echo "<br><input type='submit' value='wyslij'><br>";
            if ($_SERVER['REQUEST_METHOD']==="POST"){
                if(!EMPTY($_POST['c1'])) {
                    echo "Te liczby zostały wybrane: ".implode(', ', $_POST['c1'], ).'.';
                }
                else {
                    echo "Żadna liczba nie została wybrana.";
                }
            }
    ?>
    </form>
    </fieldset>
</body>
</html>