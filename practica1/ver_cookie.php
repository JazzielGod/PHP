<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cookie</title>
</head>
<body>
    <?php
        if(!$_COOKIE["idioma_seleccionado"]){
            header("Location:pagina1.php");
        } else if($_COOKIE["idioma_seleccionado"]=="es"){
            header("Location:spanish.php");
        } else if($_COOKIE["idioma_seleccionado"]=="in"){
            header("Location:english.php");
        }
    ?>
</body>
</html>