<?php

$first_number = (int) 13;
$second_number = (int) 8;

// Numbers can be compared with >, =, < etc

if ($first_number === $second_number) {
    echo "first_num = second_num";
    returnBreak();
}

if ($first_number > $second_number) {
    echo "first_num > second_num";
    returnBreak();
}

if ($first_number < $second_number) {
    echo "first_num < second_num";
    returnBreak();
}

if ($first_number <= $second_number) {
    echo "first_num <= second_num";
    returnBreak();
}

if ($first_number >= $second_number) {
    echo "first_num <= second_num";
}

/**
 * @return string <br>
 */
function returnBreak()
{
    echo "<br>";
}
