<?php

date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Europe/London");
error_reporting(E_ALL);
ini_set("display_errors", 1);
$file_path = $argv[1];
$text = file_get_contents($file_path);
$text = strtolower($text);
preg_match_all('/[a-z]+/', "{$text}", $matches);
$words = $matches[0];
$word_frequencies = array_count_values($words);
arsort($word_frequencies);
$top_5 = array_slice($word_frequencies, 0, 5);
print "Top 5 most common words:\n";
foreach ($top_5 as $word => $frequency) {
    print $word . " appears " . $frequency . " times\n";
}