<?php

namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

class CountWords extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Count Words';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Get top 5 words from a text';
    }


    /**
     * @return string[][]
     */
    public function getArgs()
    {
        $file_paths = glob(__DIR__ . "/../Data/longtext/*.txt");
        return [$file_paths[array_rand($file_paths)]];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}

