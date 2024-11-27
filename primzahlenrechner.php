<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen</title>
</head>
<body>
    <h1>Primzahlen Rechner</h1>
    <form>
        <label for="number">Zahl:</label>
        <input type="text" id="number" name="number" required>

        <input type="submit" name="sent">
    </form>
    <?php
        if (isset($_REQUEST['sent'])) {
            $number = $_REQUEST['number'];
            echo 'Primzahlen bis ' . $number . ':<br>';
        
            for ($i = 2; $i <= $number; $i++) {
                $isPrime = true;
        
                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j == 0) {
                        $isPrime = false;
                        break;
                    }
                }
        
                if ($isPrime) {
                    echo $i . '<br>';
                }
            }
        }
    ?>
</body>
</html>