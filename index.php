<?php
    $name = [
        'Bob',
        'John',
        'Chad',
        'Garry',
        'Ronald'
    ];

    $surname = [
        'Bobson',
        'Johnson',
        'Chadman',
        'Garrion',
        'Ronman'
    ];

    $players = [];
    $max_score = 100;

    for ($i = 1 ; $i <= 10 ; $i++) {
        $random_name = rand(0, 4);
        $random_surname = rand(0, 4);
        $random_score = 100 - 10 * $i + rand(1, 10);

        $players[] = [
            'name' => "$name[$random_name] $surname[$random_surname]",
            'score' => $random_score,
            'rank' => $i,
        ];
    }

    print "Rank | Name | Score";
    print '<br>';

    foreach($players as $player) {
        print $player['rank'] . ' | ' . $player['name'] . ' | ' . $player['score'];
        print '<br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Christmas in October??</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
</body>
</html>