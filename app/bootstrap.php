<?php
ini_set('display_errors', 1);
date_default_timezone_set('Europe/London');
switch (true) {
    case (file_exists(__DIR__ . '/../vendor/autoload.php')):
        // Installed standalone
        require __DIR__ . '/../vendor/autoload.php';
        break;
    case (file_exists(__DIR__ . '/../../../autoload.php')):
        // Installed as a Composer dependency
        require __DIR__ . '/../../../autoload.php';
        break;
    case (file_exists('vendor/autoload.php')):
        // As a Composer dependency, relative to CWD
        require 'vendor/autoload.php';
        break;
    default:
        throw new RuntimeException('Unable to locate Composer autoloader; please run "composer install".');
}

use PhpSchool\PhpWorkshop\Application;
use PhpSchool\StringThings\Exercise\ConcatWorld;
use PhpSchool\StringThings\Exercise\ImplodeWorld;
use PhpSchool\StringThings\Exercise\ReverseWorld;
use PhpSchool\StringThings\Exercise\CountWords;




$app = new Application('String Things', __DIR__ . '/config.php');

$app->addExercise(ConcatWorld::class);
$app->addExercise(ImplodeWorld::class);
$app->addExercise(ReverseWorld::class);
$app->addExercise(CountWords::class);




$art = <<<ART
        ;`._.--._
       .-,_.-'      
      /    
     
      PHP SCHOOL
    STRING THINGS
ART;

$app->setLogo($art);
$app->setFgColour('yellow');
$app->setBgColour('black');

return $app;
