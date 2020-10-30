<?php

//KLIUCIU RUOZAS
$hurdle_jump =  [
    rand(1, 10),
    rand(1, 10),
    rand(1, 10),
    rand(1, 10),
    rand(1, 10)
];

$jump_height = rand(5, 12);

function check_jump($hurdle, $jump) {
    foreach($hurdle as $height) {
        if ($jump < $height) {
            return false;
        }
    }
    return true;
}

var_dump(check_jump($hurdle_jump, $jump_height));

//LARGEST SWAP
$two_digit_num = rand(10, 99);

function check_swap($num) {
    $num_arr = str_split($num);
    $num_swapped = $num_arr[1] . $num_arr[0];
    if ($num_swapped > $num) {
        return true;
    }

    return false;
}

var_dump(check_swap($two_digit_num));

//SORT ARRAY (USING REFERENCE)
$array = [80, 29, 4, -95, -24, 85, 1, 2, 10, 50, 5];

function sorter(&$arr) {
    sort($arr);
}

sorter($array);
var_dump($array);

//ELIMINATE ODD NUMBERS (USING REFERENCE)
$array2 = [
    rand(1, 3000),
    rand(1, 3000),
    rand(1, 3000),
    rand(1, 3000),
    rand(1, 3000),
    rand(1, 3000),
];

function odd_out(&$arr) {
    foreach($arr as $key => $num) {
        if (!($num % 2 === 0)) {
            unset($arr[$key]);
        }
    }
}

odd_out($array2);
var_dump($array2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>EZ Friday</title>
</head>

<body>
</body>

</html>