<?php
$size = 0;
if (isset($_POST['range'])) {
    $size += $_POST['range'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Tuesday Forms</title>
    <style>
        .mango {
            background-image: url('https://i.pinimg.com/736x/72/2c/ac/722cac5d77e14ae3b0970cfd35fb8b36.jpg');
            background-size: cover;
            height: <?php print $size; ?>px;
            width: <?php print $size; ?>px;
        }
    </style>
</head>

<body>
    <h1>GROW ME!!!</h1>
    <form method="POST">
        <input type="range" min="100" max="200" value="<?php print $size; ?>" name="range">
        <input type="submit" name="sub">
    </form>
    <div class="mango"></div>
</body>

</html>