<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 0;
        while($i < 10){
            echo $i;
            echo "<br>";
            $i++;
        }
        echo "<br>"; 
        $i = 0;   
        do {
            echo $i;
            echo "<br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>