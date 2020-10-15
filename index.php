<?php
    $time = rand(0, 100000);

    $hours = ($time - $time % 3600) / 3600;
    $minutes = (($time - $hours * 3600) - ($time - $hours * 3600) % 60) / 60;
    $seconds = $time - $hours * 3600 - $minutes * 60;

?>

<!DOCTYPE html>
<html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<style>
    body{
        display: flex;
        flex-direction: column;
    }
</style>

<body>
    <div><?php print 'Total seconds: ' . $time;?></div>
    <div><?php print 'Converted to: ' . $hours . 'h ' . $minutes . 'min ' . $seconds . 'sec';?></div>
</body>
</html>