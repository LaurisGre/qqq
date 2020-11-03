<?php

$number_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];

function sort_pal(&$arr) {
    foreach($arr as $index => &$number) {
        if (!(substr($number, 0, 1) === substr($number, -1, 1)) ) {
            array_splice($arr, $index, 1);
        }
    }
}

sort_pal($number_array);
var_dump($number_array);

////

$string = 'mano batai buvo du';

function spongemock(&$str) {
    $upper = true;
    for ($i = 0 ; $i < strlen($str) ; $i++) {
        if ($str[$i] != ' ') {
            $upper ?
            $str[$i] = strtoupper($str[$i]):
            $str[$i] = strtolower($str[$i]);
            $upper = !$upper;
        }
    }
}

spongemock($string);
var_dump($string);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>EZ Tuesday</title>
</head>

<body>
</body>

</html>