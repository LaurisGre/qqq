<?php
    $days_in_month = 31;
    $random_day = rand(1, 31);
    $price_per_kwh = 0.07;
    $total_kwh_used = 0;

    for($i = 0; $i < $days_in_month; $i++){
        $used_ped_day = rand(2, 5);
        $total_kwh_used += $used_ped_day;
        print "$i";
        print "<br />";
        if($i === $random_day) {
            break;
        }
    }

    $total_price = $total_kwh_used * $price_per_kwh;
    print "Iki $random_day mėnesio dienos bus saunaudota $total_kwh_used kwh";
    print "<br />";
    print "Reiks sumokėti $$total_price";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity billt</title>
    <style>
    </style>
</head>
<body>
</body>
</html>