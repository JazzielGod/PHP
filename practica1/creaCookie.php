<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <?php
        setcookie("idioma_seleccionado", $_GET["idioma"], time()+86400);

        header("Location:ver_cookie.php");

    ?>
</body>
</html>