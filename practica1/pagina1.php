<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 1</title>
</head>
<body>

    <?php
        if(isset($_COOKIE["idioma_seleccionado"])){
            if($_COOKIE["idioma_seleccionado"]=="es"){
                header("Location:spanish.php");
            } else if($_COOKIE["idioma_seleccionado"]=="in"){
                header("Location:english.php");
            }
        }
    ?>

    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center"><h1>Elige el idioma</h1></td>
        </tr>
        <tr>
            <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/mex.png" width="90" height="60"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=in"><img src="img/ing.png" width="90" height="60"></a></td>
        </tr>
    </table>
</body>
</html>