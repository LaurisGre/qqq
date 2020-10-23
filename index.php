<?php
    $series = [
        'season1' => [
            'release_date' => 2010,
            'episodes' => [
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
            ],
        ],
        'season2' => [
            'release_date' => 2012,
            'episodes' => [
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
            ],
        ],
        'season3' => [
            'release_date' => 2014,
            'episodes' => [
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
            ],
        ],
        'season4' => [
            'release_date' => 2017,
            'episodes' => [
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
                rand(50, 60),
            ],
        ],
    ];

    $time_per_day_for_series = 60;
    $total_episodes = 0;
    $total_length = 0;

    foreach($series as $season) {
        $total_episodes += count($season['episodes']);
        foreach($season['episodes'] as $episode) {
            $total_length += $episode;
        }
    }

    $total_seasons = count($series);
    $time_to_finish_series = ceil($total_length / $time_per_day_for_series);
    
    $p1 = "The Sherlock TV series has $total_seasons seasons";
    $p2 = "There are $total_episodes episodes in total";
    $p3 = "With the combined running time of $total_length minutes";
    $p4 = "If you would spend $time_per_day_for_series minutes a day watching them";
    $p5 = "It would take you $time_to_finish_series days to finish it to completion";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Series</title>
</head>
<body>
    <p><?php print $p1; ?></p>
    <p><?php print $p2; ?></p>
    <p><?php print $p3; ?></p>
    <p><?php print $p4; ?></p>
    <p><?php print $p5; ?></p>
</body>
</html>