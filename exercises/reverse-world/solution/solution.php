<?php

$exploded_sentence = explode(" ", $argv[1]);
$exploded_sentence = array_reverse($exploded_sentence);

print(implode(" ", $exploded_sentence));