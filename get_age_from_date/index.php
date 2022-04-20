<?php

$input_date = "1994-05-22";
$current_date = date('Y-m-d'); // Get current date 

$diff_in_secs = strtotime($current_date) - strtotime($input_date); // Get difference in seconds
$result_in_years = $diff_in_secs / (60 * 60 * 24 * 365); // Convert to years
echo (int) $result_in_years; // Return value in years (integer) 