<?php 
    $cards_total = rand(10, 50);
    $h3 = "Iš viso kortelių: $cards_total";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }

        .box{
            width: 600px;
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
            background-color: red;
            text-align: center;
        }

        .card{
            width: 180px;
            height: 60px;
            margin: 10px;
            background-color: lawngreen;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h3><?php print $h3; ?></h3>
    <div class='box'>
    <?php 
        for($i = 1 ; $i <= $cards_total ; $i++) {
            print "<div class='card'>$i</div>";
    }
    ?>
    </div>
</body>
</html>