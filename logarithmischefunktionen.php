<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen</title>
    <style>
        p{
            font-size: small;
            line-height: 0.5px;
        }
    </style>
</head>
<body>
    <h1>Logarithmische Funktionen</h1>
    <?php
    for($i = 1; $i <= 100; $i++){
        $log = log($i);
        echo '<p>' . str_repeat("*", round($log * 10)) . '</p>';
    }
    ?>
</body>
</html>