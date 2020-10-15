<?php
 
    $year = rand(1991, 2020);

    if ($year % 400 === 0 || ($year % 4 === 0 && $year % 100 != 0)) {
        $leap_year = $year . ' was a leap year';
    } else {
        $leap_year = $year . ' was not a leap year';
    }

?>

<!DOCTYPE html>
<html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php print $leap_year; ?>
</body>
</html>