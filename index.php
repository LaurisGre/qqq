<?php
    $child_count = rand(3, 8);
    $child_price_per_drink = 0.65;
    $child_total_drinks = 0;
    $child_total_price = 0;

    $adult_count = rand(4, 18);
    $adult_price_per_drink = 1.15;
    $adult_total_drinks = 0;
    $adult_total_price = 0;

    $total_drinks = 0;
    $total_price = 0;
    
    for ($i = 0; $i < $child_count; $i++) {
        $drink_per_child = rand(1, 5);
        $child_total_drinks += $drink_per_child;
        $total_drinks += $drink_per_child;
        $child_total_price += $drink_per_child * $child_price_per_drink;
        $total_price += $drink_per_child * $child_price_per_drink;
    }

    for ($u = 0; $u < $child_count; $u++) {
        $drink_per_adult = rand(4, 8);
        $adult_total_drinks +=  $drink_per_adult;
        $total_drinks += $drink_per_adult;
        $adult_total_price += $drink_per_adult * $adult_price_per_drink;
        $total_price += $drink_per_adult * $adult_price_per_drink;
    }

    $depozito = $total_drinks * 0.1;

    print "$child_count vaikai išgerė $child_total_drinks sulčių butelius už $child_total_price$";
    print "<br />";
    print "$adult_count dėdžių išgerė $adult_total_drinks alaus butelius už $adult_total_price$";
    print "<br />";
    print "Iš viso buvo išgertą $total_drinks buteliai už $total_price$ depozitas $depozito$";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1>Drink Calculator</h1>

</body>
</html>