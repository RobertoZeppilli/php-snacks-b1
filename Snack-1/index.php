<?php
// ## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60


$partite = [
    [
        "casa" => "Chicago Bulls",
        "ospiti" => "L.A. Lakers",
        "punti" => [
            "punti_casa" => 55,
            "punti_ospiti" => 44
        ]
    ],
    [
        "casa" => "L.A. Clippers",
        "ospiti" => "Boston Celtics",
        "punti" => [
            "punti_casa" => 58,
            "punti_ospiti" => 78
        ]
    ],
    [
        "casa" => "Toronto Raptors",
        "ospiti" => "Utah Jazz",
        "punti" => [
            "punti_casa" => 99,
            "punti_ospiti" => 102
        ]
    ],
    [
        "casa" => "S.A. Spurs",
        "ospiti" => "Dallas Mavericks",
        "punti" => [
            "punti_casa" => 47,
            "punti_ospiti" => 68
        ]
    ]
];

$risultati = '';
for ($i = 0; $i < count($partite); $i++) {
    $partita = $partite[$i];
    $puntiCasa = $partita["punti"]["punti_casa"];
    $puntiOspite = $partita["punti"]["punti_ospiti"];

    $risultati .= "<li>" . $partita["casa"] . " - " . $partita["ospiti"] . " | " . "<strong>" . $puntiCasa . "</strong>" . " - " . "<strong>" . $puntiOspite . "</strong>" . "</li>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <section>
        <h2>Risultati 3a giornata</h2>
        <ul>
          <?php echo $risultati; ?>
        </ul>
    </section>
</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
h2 {
    text-align: center;
}
ul {
    list-style: none;
}

li {
    margin: 20px 0;
}
</style>