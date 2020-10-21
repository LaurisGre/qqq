<?php
    $height = rand(10, 30);

    for($i = 0; $i < $height; $i++) {
        for ($u = 0; $u < $i; $u++) {
            $ornament = rand(1, 30);
            if ($ornament != 1 && $ornament != 2 && $ornament != 3) {
                print '*';
            } else if ($ornament === 1) {
                print 'O';
            } else if ($ornament === 2) {
                print 'X';
            } else {
                print '[]';
            }
        }
        if ($i != $height -1) {
            print '</br>';
        }
    }

    for($i = 0; $i <= 2; $i++) {
        for ($u = 0; $u < $i; $u++) {
            print '*';
        }
        print '</br>';
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