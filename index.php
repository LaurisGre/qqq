<?php 
    for($u = 0; $u < 8; $u++) {
        print '<div class="row">';
        for($i = 0; $i < 8; $i++){
            $sum = $i + $u;
            if ($sum % 2 === 0) {
                print "<div class='card black'>$sum</div>"; 
            } else {
                print "<div class='card '>$sum</div>";
            }
        }
        print '</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        .card {
            height: 40px;
            width: 40px;
            border: 1px solid black;
        }

        .row {
            display: flex;
        }

        .black{
            background-color: black;
        }
    </style>
</head>
<body>
</body>
</html>