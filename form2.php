<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz z walidacją</title>
    <style>
        fieldset{border: 1px solid darkgreen; background-color: lightgreen; width: 500px; padding: 10px; margin: 10px; }
    </style>
</head>
<body>
<form action="form2.php" method="post">
    <fieldset>
        <legend style="border:1px solid darkgreen;background-color: lightgreen;">Formularz z walidacją</legend>
        <?php
        $login = $email = $gender = $page = $miasto = '';
        $login_blad = $email_blad = $kto_blad = $page_blad = $miasto_blad = '';
        $valid_input = $_POST['login'] && $_POST['email'] && $_POST['page'] && $_POST['miasto'];
        $valid_msg;
        $filename = "form2.txt";
        $datetime = date("Y-m-d H:i:s");
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_blad = 'Niepoprawny email';
            }
            $page = filter_var($_POST['page'], FILTER_SANITIZE_URL);
            if (!filter_var($page, FILTER_VALIDATE_URL)) {
                $page_blad = 'Niepoprawny adres strony';
                
            }

            $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
            if (!filter_var($login, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z0-9]+$/")))) {
                $login_blad = 'Niepoprawny login';
                $valid_input = false;
            }
            $login = trim($_POST['login']);
            $login = filter_var($login, FILTER_SANITIZE_STRING);
            if (!filter_var($login, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z0-9]+$/")))) {
                $login_blad = 'Niepoprawny login';
                $valid_input = false;
            }
            $miasto = $_POST['miasto'];
            if (empty($miasto)) {
                $miasto_blad = 'Wybierz miasto';
                $valid_input = false;
            }
            if (isset($_POST['gender'])) {
                $gender = $_POST['gender'];
            } else {
                $kto_blad = 'Wybierz jedną opcję';
                $valid_input = false;
            }
        }


        ?>
        <label for="login">Login:</label>
        <span style="color:red;">* <?= $login_blad ?></span><br>

        <input type="text" id="login" name="login" placeholder="podaj login" value="<?= $login ?>"><br><br>
        <label for="email">Email:</label>

        <span style="color: red">*  <?= $email_blad ?></span><br>
        <input type="text" id="email" name="email" placeholder="podaj email" value="<?= $email ?>"><br><br>

        <label for="page">Strona internetowa:</label>
        <span style="color:red;">* <?= $page_blad ?></span><br>
        <input type="text" id="page" name="page" placeholder="podaj stronę internetową" value="<?= $page ?>"><br><br>
        <br>

        <label for="#">Wybierz miasto/miasta: </label>
        <span style="color: red">* <?= $miasto_blad ?></span><br>

        <input type="checkbox" id="warszawa" name="miasto[]"
               value="warszawa" <?php if ($miasto && strstr(implode('', $miasto), 'warszawa')) echo 'checked'; ?>>
        <label for="warszawa">Warszawa</label><br>

        <input type="checkbox" id="poznan" name="miasto[]"
               value="poznan" <?php if ($miasto && strstr(implode('', $miasto), 'poznan')) echo 'checked'; ?>>
        <label for="poznan">Poznań</label><br>

        <input type="checkbox" id="gdansk" name="miasto[]"
               value="gdansk" <?php if ($miasto && strstr(implode('', $miasto), 'gdansk')) echo 'checked'; ?>>
        <label for="gdansk">Gdańsk</label><br>

        <input type="checkbox" id="szczecin" name="miasto[]"
               value="szczecin" <?php if ($miasto && strstr(implode('', $miasto), 'szczecin')) echo 'checked'; ?>>
        <label for="szczecin">Szczecin</label><br><br>

        <label for="#">Wybierz jedną opcję </label>
        <span style="color: red">* <?= $kto_blad ?></span><br>
        <input type="radio" id="kobieta" name="gender[]"
               value="kobieta" <?php if ($gender && strstr(implode('', $gender), 'kobieta')) echo 'checked'; ?>>
        <label for="kobieta">kobieta</label><br>
        <input type="radio" id="mezczyzna" name="gender[]"
               value="mezczyzna" <?php if ($gender && strstr(implode('', $gender), 'mezczyzna')) echo 'checked'; ?>>
        <label for="mezczyzna">mężczyzna</label><br>
        <input type="radio" id="unknown" name="gender[]"
               value="unknown" <?php if ($gender && strstr(implode('', $gender), 'unknown')) echo 'checked'; ?>>
        <label for="unknown">nie chcę podawać</label><br><br>
        <button type="submit">Wyślij</button>
    </fieldset>
    <?php 
                if ($valid_input == true) {
                    $valid_msg = 'Dane poprawne';
                    $file = fopen($filename, "a");
                    fwrite($file, "Login: " . $login . "\n");
                    fwrite($file, "Email: " . $email . "\n");
                    fwrite($file, "Strona: " . $page . "\n");
                    fwrite($file, "Miasto: " . implode(', ', $miasto) . "\n");
                    fwrite($file, "Płeć: " . implode(', ', $gender) . "\n");
                    fwrite($file, "----------------------------------------\n");
                    fclose($file);
                }
    ?>
</form>
</body>
</html>