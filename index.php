<?php 
    $breakfast_1 = 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/healthy_porridge_bowl-d434804.jpg?quality=90&resize=500%2C454';
    $breakfast_2 = 'https://www.tasteofhome.com/wp-content/uploads/2018/01/Hearty-Multigrain-Pancakes_EXPS_CF219_27535_B12_13_6b-1.jpg';
    $breakfast_3 = 'https://simply-delicious-food.com/wp-content/uploads/2018/10/breakfast-board-500x500.jpg';
    $breakfast_1_price = 4.11;
    $breakfast_2_price = 4.28;
    $breakfast_3_price = 4.86;

    $lunch_1 = 'https://img.taste.com.au/Eo3MXqUa/w1200-h630-cfill/taste/2018/02/chicken-caesar-veggie-wraps-taste-135072-1.jpg';
    $lunch_2 = 'https://www.incimages.com/uploaded_files/image/1920x1080/getty_145063693_2000167720009280367_66971.jpg';
    $lunch_3 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTMHI9AiegLlNe9rkrKBiAWjW2CWA2XI2kJnw&usqp=CAU';
    $lunch_1_price = 5.83;
    $lunch_2_price = 5.24;
    $lunch_3_price = 6.11;

    $dinner_1 = 'https://images.immediate.co.uk/production/volatile/sites/30/2019/12/tandoori-trout-bb9fe6c.jpg?quality=90&resize=960,872';
    $dinner_2 = 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/high-protein-dinners-slow-cooker-meatballs-image-5a04d02.jpg?quality=90&resize=500%2C454';
    $dinner_3 = 'https://i1.wp.com/www.eatthis.com/wp-content/uploads/2019/10/pumpkin-pad-thai-recipe.jpg?resize=640%2C360&ssl=1';
    $dinner_1_price = 7.37;
    $dinner_2_price = 8.23;
    $dinner_3_price = 7.62;

    $breakfast_random = rand(1,3);
    $lunch_random = rand(1,3);
    $dinner_random = rand(1,3);

    if ($breakfast_random == 1) {
        $breakfast_option = $breakfast_1;
        $breakfast_price = $breakfast_1_price;
    } else if ($breakfast_random == 2) {
        $breakfast_option = $breakfast_2;
        $breakfast_price = $breakfast_2_price;
    } else {
        $breakfast_option = $breakfast_3;
        $breakfast_price = $breakfast_3_price;
    }

    if ($lunch_random == 1) {
        $lunch_option = $lunch_1;
        $lunch_price = $lunch_1_price;
    } else if ($lunch_random == 2) {
        $lunch_option = $lunch_2;
        $lunch_price = $lunch_2_price;
    } else {
        $lunch_option = $lunch_3;
        $lunch_price = $lunch_3_price;
    }

    if ($dinner_random == 1) {
        $dinner_option = $dinner_1;
        $dinner_price = $dinner_1_price;
    } else if ($dinner_random == 2) {
        $dinner_option = $dinner_2;
        $dinner_price = $dinner_2_price;
    } else {
        $dinner_option = $dinner_3;
        $dinner_price = $dinner_3_price;
    }

    $breakfast_cheapest = null;
    $lunch_cheapest = null;
    $dinner_cheapest = null;

    if ($breakfast_price === $breakfast_1_price) {
        $breakfast_cheapest = '<div class="cheap">Cheapest Option</div>';
    }

    if ($lunch_price === $lunch_2_price){
        $lunch_cheapest = '<div class="cheap">Cheapest Option</div>';
    }

    if ($dinner_price === $dinner_3_price) {
        $dinner_cheapest = '<div class="cheap">Cheapest Option</div>';
    }

    $date_tomorrow = date('Y-m-d', strtotime('+1 day'));
    $total_price = $breakfast_price + $lunch_price + $dinner_price;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meal Planner</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    img {
        max-height: 130px;
    }

    .cheap {
        background-color: lawngreen;
        padding: 5px;
    }
</style>

<body>
    <div id="mainBox">
        <div>
            <?php print $date_tomorrow ?>
        </div>
        <div id="breakfast" class="foodbox">
            <div>Breakfast</div>
            <img src=<?php print $breakfast_option; ?>>
            <?php print $breakfast_cheapest; ?>
            <div>Price: $<?php print $breakfast_price; ?></div>
        </div>
        <div id="lunch" class="foodbox">
            <div>Lunch</div>
            <img src=<?php print $lunch_option; ?>>
            <?php print $lunch_cheapest; ?>
            <div>Price: $<?php print $lunch_price; ?></div>
        </div>
        <div id="dinner" class="foodbox">
            <div>Dinner</div>
            <img src=<?php print $dinner_option; ?>>
            <?php print $dinner_cheapest; ?>
            <div>Price: $<?php print $dinner_price; ?></div>
        </div>
        <div>Price of all meals for the day: $<?php print $total_price ?></div>
    </div>
</body>
</html>