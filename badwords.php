<?php
    $testo = $_GET["paragrafo"];
    $censura = "Lorem"
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>


    <h3>Paragrafo originale</h3>
    <p>
        <?php echo $testo; ?>
    </p>

    <h3>Paragrafo censurato</h3>
    <p>
        <?php echo $testo; ?>
    </p>
</body>
</html>