<?php
    $matrix_array = [
        [
            [1, 2, 3],
            [3, 2, 1],
            [1, 1, 1],
        ],
        [
            [2, 2, 1],
            [3, 2, 3],
            [1, 1, 3],
        ]
    ];

    $matrix_sum = [
        [0,0,0],
        [0,0,0],
        [0,0,0],
    ];

    foreach($matrix_array as $matrix) {
        foreach($matrix as $r => $row) {
            foreach($row as $n => $num) {
                $matrix_sum[$r][$n] += $num;
            }
        }
    }
    
    var_dump($matrix_sum);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matrix</title>
</head>
<body>
</body>
</html>