<?php

$text = $argv[1];
$key = $argv[2];

$lower_bound = 32;
$upper_bound = 127;

$text_ords = array_map("ord", str_split($text));
$key_ords = array_map("ord", str_split($key));

$text_length = count($text_ords);
$key_length = count($key_ords);

for ($i = 0; $i < $text_length; ++$i) {
    $text_ords[$i] = (($text_ords[$i] - $lower_bound + $key_ords[$i % $key_length]) % ($upper_bound - $lower_bound)) + $lower_bound;
}

$text_chars = array_map("chr", $text_ords);

print(implode($text_chars));
