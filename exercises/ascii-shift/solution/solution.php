<?php

$text = $argv[1];
$shift = $argv[2];

$lower_bound = 31;
$upper_bound = 126;

$char_array = str_split($text);
$ord_array = array_map("ord", $char_array);

foreach ($ord_array as &$value) {
    $value += $shift;

    if ($value > $upper_bound) {
        $value -= ($upper_bound - $lower_bound);
    }
}

$char_array = array_map("chr", $ord_array);

print(implode($char_array));
