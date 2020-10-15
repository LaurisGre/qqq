<?php
    $name = 'Laurynas';
    $age = rand(15, 30);
    $criminal = rand(0, 1);
    $kids = rand(0, 5);

    $verdict = $name;
    
    if ($age > 18 && $age < 25) {
        $verdict .= ' keliauja į kariuomenę';

        if ($criminal) {
            $verdict =  $name . ' nekeliauja į kariuomenę nes yra banditas';
            if ($kids >= 2) {
                $verdict .= ' ir turi ' . $kids . ' vaikus';
            }
        } else if ($kids >= 2) {
            $verdict = $name . ' nekeliauja į kariuomenę, nes turi ' . $kids . ' vaikus';
        }
    } else {
        $verdict .= ' nekeliauja į kariuomenę';

        if ($age < 18) {
            $verdict .= ' nes yra vaikas';
        }
        if ($age > 25) {
            $verdict .= ' nes yra pensininkas';
        }

        if ($criminal) {
            $verdict .= ' ir banditas';
        }

        if ($kids > 2) {
            $verdict .= ' ir turi ' . $kids . ' vaikus';
        }
    }
?>

<!DOCTYPE html>
<html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php print $verdict ?>
</body>
</html>