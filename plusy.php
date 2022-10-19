<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        $plusy = rand(0, 10);
        echo $plusy."<br>";
        switch ($plusy) {
            case '1':
                echo "+";
                break;
            case '2':
                echo "++";
                break;
            case '3':
                echo "+++";
                break;
            case '4':
                echo "++++";
                break;
            case '5':
                echo "+++++";
                break;
            case '6':
                echo "++++++";
                break;
            case '7':
                echo "+++++++";
                break;
            case '8':
                echo "++++++++";
                break;
            case '9':
                echo "+++++++++";
                break;
            default:
                echo "Wartość jest poza zakresem <0, 10>";
                break;
        }
        ?>
    </pre>
</body>
</html>