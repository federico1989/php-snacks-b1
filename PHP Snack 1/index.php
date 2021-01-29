<!-- Creiamo un array 'matches' contenente altri array i quali 
rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti 
fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php
    $matches = [
        [
            "homeTeam" => "Olimpia Milano",
            "awayTeam" => "Cantù",
            "homePoints" => "55",
            "awayPoints" => "60",
        ],
        [
            "homeTeam" => "Virtus Bologna",
            "awayTeam" => "Brescia",
            "homePoints" => "89",
            "awayPoints" => "90",
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snack 1</title>
    </head>
    <body>
    <h1><?php for($i=0; $i < count($matches); $i++) {
        echo $matches[$i]["homeTeam"] . " - " . $matches[$i]["awayTeam"] . " / " . $matches[$i]["homePoints"] . " - " . $matches[$i]["awayPoints"]; 
        ?><br><?php
    } ?>
    </h1>
    </body>
</html>