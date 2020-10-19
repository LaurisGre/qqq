<?php 
    $coordX = 10;
    $coordY = 10;

    $coordX2 = 10;
    $coordY2 = 10;

    for($i = 0 ; $i < $coordY ; $i++) {
        for($u = 10 ; $u >= $coordX ; $u--){
            print '*';
            if ($u === $coordX){
                $coordX--;
                break;
            }
        }
        print '<br />';
    }

    for($i = 0 ; $i < $coordY2 ; $i++) {
        for($u = 1 ; $u <= $coordX2 ; $u++){
            print '*';
            if ($u === $coordX2){
                $coordX2--;
                break;
            }
        }
        print '<br />';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
</body>
</html>