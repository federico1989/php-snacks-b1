<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET["nome"];
$mail = $_GET["mail"];
$age = $_GET["età"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snack 2</title>
    </head>
    <body>
        <h1><?php 
            if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        ?>
        
        
        </h1>
    </body>
</html>