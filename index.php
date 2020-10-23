<?php
    $array = [7, 2, 8, 287, 5, 7, 16, -5, -6, -7, 15.22, 1.66, -69.55, 1, 5, 7, 5];

//Task 1. Multiple the numbers by 2

    $array_task_1 = [];
    foreach($array as $num) {
        $array_task_1[] = $num * 2;
    }
    print 'Task 1.';
    var_dump($array_task_1);

//Task 2. Square the numbers

    $array_task_2 = [];
    foreach($array as $num) {
        $array_task_2[] = $num ** 2;
    }
    print 'Task 2.';
    var_dump($array_task_2);

//Task 3. Multiply the numbers by their index

    $array_task_3 = [];
    foreach($array as $key => $num) {
        $array_task_3[] = $num * $key;
    }
    print 'Task 3.';
    var_dump($array_task_3);

//Task 4. Filter out positive numbers

    $array_task_4 = [];
    foreach($array as $num) {
        if($num > 0) {
            $array_task_4[] = $num;
        }
    }
    print 'Task 4.';
    var_dump($array_task_4);

//Task 5. Filter out negative numbers

    $array_task_5 = [];
    foreach($array as $num) {
        if($num < 0) {
            $array_task_5[] = $num;
        }
    }
    print 'Task 5.';
    var_dump($array_task_5);

//Task 6. Filter out even numbers

    $array_task_6 = [];
    foreach($array as $num) {
        if($num % 2 === 0) {
            $array_task_6[] = $num;
        }
    }
    print 'Task 6.';
    var_dump($array_task_6);

//Task 7. Filter out uneven numbers

    $array_task_7 = [];
    foreach($array as $num) {
        if($num % 2 !== 0) {
            $array_task_7[] = $num;
        }
    }
    print 'Task 7.';
    var_dump($array_task_7);

//Task 8. Turn negative values absolute

    $array_task_8 = [];
    foreach($array as $num) {
        if($num < 0) {
            $array_task_8[] = abs($num);
        } else {
            $array_task_8[] = $num;
        }
    }
    print 'Task 8.';
    var_dump($array_task_8);

//Task 9. Raise the numbers by their indexes

    $array_task_9 = [];
    foreach($array as $key => $num) {
        $array_task_9[] = $num ** $key;
    }
    print 'Task 9.';
    var_dump($array_task_9);

//Task 10. Filter out natural numbers

    $array_task_10 = [];
    foreach($array as $num) {
        if(gettype($num) === 'integer') {
            $array_task_10[] = $num;
        }
    }
    print 'Task 10.';
    var_dump($array_task_10);

//Task 11. Round the numbers to whole values

    $array_task_11 = [];
    foreach($array as $num) {
        $array_task_11[] = round($num);
    }
    print 'Task 11.';
    var_dump($array_task_11);

//Task 12. Filter out every other number

    $array_task_12 = [];
    foreach($array as $key => $num) {
        if(($key+1) % 2 === 0) {
            $array_task_12[] = $num;
        }
    }
    print 'Task 12.';
    var_dump($array_task_12);

//Task 13. Filter out every fifth number

    $array_task_13 = [];
    foreach($array as $key => $num) {
        if(($key+1) % 5 === 0) {
            $array_task_13[] = $num;
        }
    }
    print 'Task 13.';
    var_dump($array_task_13);

//Task 14. Sum up all the values in the array

    $array_task_14 = 0;
    foreach($array as $num) {
        $array_task_14 += $num;
    }
    print 'Task 14.';
    var_dump($array_task_14);

//Task 15. Calculate the average value of the array

    $array_task_15 = 0;
    foreach($array as $num) {
        $array_task_15 += $num;
    }
    print 'Task 15.';
    var_dump(number_format(($array_task_15 / count($array)), 2));

//Task 16. Find the highest number in the array

    print 'Task 16.';
    var_dump(max($array));

//Task 17. Find the lowest number in the array

    print 'Task 17.';
    var_dump(min($array));

//Task 18. Sort the numbers in the array from lowest to highest

    print 'Task 18.';
    sort($array);
    var_dump($array);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quic mafs</title>
</head>
<body>
</body>
</html>