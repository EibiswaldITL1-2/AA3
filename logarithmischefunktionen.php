<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen</title>
</head>
<body>
    <h1>Logarithmische Funktionen</h1>
    <?php
    for($i = 1; $i <= 100; $i++){
        $log = log($i);
        for($j = 1; $j <= round($log * 10); $j++){
            echo '*';
        }
        echo '<br>';
    }
    ?>
</body>
</html>