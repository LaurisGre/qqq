<?php 
    for ($num = 1; $num < 10; $num++) {
        print '<div class="card">';
        for ($i = 1; $i <= 9; $i++) {
            $result = $num * $i;
            print "$num x $i = $result";
            print "<br />";
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
        body{
            display: flex;
        }

        .card {
            padding: 5px;
            margin: 5px;
            border: 1px solid black;
            height: 160px;
        }
    </style>
</head>
<body>
</body>
</html>