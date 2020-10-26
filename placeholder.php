<?php 
while(count($cars_array)) {
    $cars_array_shuffled = [];
    $rand_index = rand(0, count($cars_array) - 1);
    $cars_array_shuffled[] = $cars_array[$rand_index];
    // array_splice($cars_array, $rand_index, ($rand_index == count($cars_array) ? 1 : $rand_index - count($cars_array)));
    
}

var_dump($cars_array_shuffled);

?>