<?php

$my_array = [12, 14, 1, 9, 8, 3, 15, 7, 8, 45, 20];
$sorted_array = $my_array; // Copy array
sort($sorted_array, SORT_NUMERIC); // sort copied array
echo "unsorted array - " .json_encode($my_array);
echo "<br>";
echo "sorted array - " .json_encode($sorted_array);
