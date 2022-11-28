<?php
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60

//Creo un array associativo in PHP
$basketMatches2022 =
    [
        [
            "homeTeam" => "Angels",
            "visitingTeam" => "Raptor",
            "homeTeamPoints" => "10",
            "visitingTeamPoints" => "50"
        ],
        [
            "homeTeam" => "Tokyo Angels",
            "visitingTeam" => "Nasa Aliens",
            "homeTeamPoints" => "100",
            "visitingTeamPoints" => "20"
        ],
        [
            "homeTeam" => "Devil Bat",
            "visitingTeam" => "Poseidon",
            "homeTeamPoints" => "100",
            "visitingTeamPoints" => "95"
        ],
        [
            "homeTeam" => "Pharaons",
            "visitingTeam" => "Mammoth",
            "homeTeamPoints" => "40",
            "visitingTeamPoints" => "55"
        ],
        [
            "homeTeam" => "Evangelion",
            "visitingTeam" => "Alchemists",
            "homeTeamPoints" => "120",
            "visitingTeamPoints" => "100"
        ],

    ];

var_dump($basketMatches2022);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <ul>
        <?php foreach ($basketMatches2022 as $match) ?>
        <li>
            <?php echo $match['homeTeam'] ?>
        </li>
    </ul>
</body>

</html>