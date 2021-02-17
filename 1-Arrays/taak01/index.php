<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $medewerkers = [
        [
            'voornaam' => 'Willem',
            'achternaam' => 'van Oranje',
            'functie'  => 'koning'
        ],
        [
            'voornaam' => 'Donald',
            'achternaam' => 'Trump',
            'functie'  => 'president'
        ]

    ];
    echo $medewerkers[0]['voornaam'] . " " . $medewerkers[0]['achternaam'] . " is een " . $medewerkers[0]['functie'] . ".<br> ";
    echo $medewerkers[1]['voornaam'] . " " . $medewerkers[1]['achternaam'] . " is een " . $medewerkers[1]['functie'] . ".<br> ";;
    ?>
</body>

</html>