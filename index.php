<?php
    $matrix_array = [
        [0, 0, 1],
        [1, 0, 1],
        [0, 1, 0],
    ];

    $new_matrix = [];

    foreach($matrix_array as $r => $row) {
        foreach($row as $n => $num) {
            $new_matrix[$r][$n] = $num == 0 ? 1 : 0;
        }
    }
    
    var_dump($new_matrix);
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