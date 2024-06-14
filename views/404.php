<?php
    http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Helaas de pagina <?php echo @$_SERVER['REQUEST_URI']; ?> is niet gevonden.
    </p>
    <a href="/home">Ga terug naar de home page</a>
</body>
</html>