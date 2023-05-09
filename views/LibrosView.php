<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Libros</title>
    </head>
    <body>
        <h2>Libros de finanzas</h2>
        <ul>
            <?php
            foreach ($datos as $dato) 
            {
                print "<li>".$dato["titulo"]. ", " . $dato["autor"];
            }
            ?>
        </ul>
    </body>
</html>