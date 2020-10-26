<?php
    $cars_array = [
        [
            'image' => 'https://cdn.motor1.com/images/mgl/VmOzG/s4/obnovlennaya-lada-4x4.jpg',
            'brand' => 'Lada',
            'model' => 'Niva 4x4',
            'year' => 2020,
            'price' => 10000,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Car_Lada_russian.jpg/800px-Car_Lada_russian.jpg',
            'brand' => 'Lada',
            'model' => '1200 S',
            'year' => 1972,
            'price' => 500,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Aston_Martin_DB5_%28Skyfall%29.jpg/280px-Aston_Martin_DB5_%28Skyfall%29.jpg',
            'brand' => 'Aston Martin',
            'model' => 'DB5',
            'year' => 1963,
            'price' => 1500,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/2019_Aston_Martin_Vantage_V8_Automatic_4.0_%281%29.jpg/280px-2019_Aston_Martin_Vantage_V8_Automatic_4.0_%281%29.jpg',
            'brand' => 'Aston Martin',
            'model' => 'Vantage',
            'year' => 2018,
            'price' => 1000,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Porsche_Taycan_at_IAA_2019_IMG_0786.jpg/280px-Porsche_Taycan_at_IAA_2019_IMG_0786.jpg',
            'brand' => 'Porsche',
            'model' => 'Taycan',
            'year' => 2015,
            'price' => 2000,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Porsche_Panamera_4_E-Hybrid_%28MSP17%29.jpg/280px-Porsche_Panamera_4_E-Hybrid_%28MSP17%29.jpg',
            'brand' => 'Porsche',
            'model' => 'Panamera',
            'year' => 2010,
            'price' => 3000,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://www.gannett-cdn.com/-mm-/7e482a443740f52337eba28dff4794963c9ca5ad/c=0-307-2996-2000/local/-/media/2017/04/08/DetroitFreePress/DetroitFreePress/636272846986490390-2018-Dodge-Demon-35.jpg',
            'brand' => 'Dodge',
            'model' => 'Demon',
            'year' => 2018,
            'price' => 4000,
            'on_sale' => rand(0, 1)
        ],
        [
            'image' => 'https://www.motortrend.com/uploads/sites/5/2018/02/Hennessey-Exorcist-Chevrolet-Camaro-ZL1-top-speed-run-17.jpg',
            'brand' => 'Dodge',
            'model' => 'Exorcist',
            'year' => 2018,
            'price' => 5000,
            'on_sale' => rand(0, 1)
        ],
    ];

    shuffle($cars_array);

    $car_brand = ['Aston Martin', 'Lada', 'Dodge'];
    $cars_by_brand = [];
    $min_price = 999;
    $cars_by_min_price = [];
    $max_price = 6000;
    $cars_final_sort = [];

    foreach($cars_array as $car) {
        if (in_array($car['brand'], $car_brand)) {
            $cars_by_brand[] = $car;
        }
    }

    foreach($cars_by_brand as $car) {
        if ($car['price'] > $min_price) {
            $cars_by_min_price[] = $car;
        }
    }

    foreach($cars_by_min_price as $car) {
        if ($car['price'] < $max_price) {
            $cars_final_sort[] = $car;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Avto turgasas</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .car_box {
            width: 800px;
            margin: 0, auto;

            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 20px;
        }

        .car_card {
            width: 200px;
            height: 300px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            border: 5px solid gold;
            border-radius: 20px;
        }

        .car_card img {
            max-height: 160px;
            max-width: 160px;
        }

        .price {
            color: lawngreen;
        }

        .sold {
            color: red;
        }
    </style>
</head>
<body>
    <div class="car_box">
        <?php foreach($cars_final_sort as $car): ?>
            <div class="car_card">
                <img src="<?php print $car['image'] ?>" alt="">
                <p><?php print $car['brand'] . ' ' . $car['model'] ?></p>
                <p><?php print $car['year'] ?> </p>
                <p class="<?php print $car['on_sale'] ? 'price' : 'sold'?>">
                    <?php print $car['on_sale'] ? '$' . $car['price'] : 'SOLD OUT'?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>