<?php
    $work_time = 12;
    $profit = 0;
    $people_spin = 0;
    $people_left = 0;
    $total_spins = 0;

    for ($i = 0; $i < 12; $i++) {
        $people_per_hour = rand(1, 20);
        if ($people_per_hour >= 10) {
            $total_spins++;
            $profit += 130;
            $people_spin += 10;
            $people_left += $people_per_hour - 10;
        } else {
            $people_left += $people_per_hour;
        }
    }

    $p1 = "Karusele uzdirbo $profit jevru";
    $p2 = "Prasisuko $people_spin zmones";
    $p3 = "Isejo $people_left zmogai";
    $p4 = "Pilnu pakrovimu karusele sukosi $total_spins";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carusele</title>
    <style>
    </style>
</head>
<body>
    <p><?php print $p1; ?></p>
    <p><?php print $p2; ?></p>
    <p><?php print $p3; ?></p>
    <p><?php print $p4; ?></p>
</body>
</html>