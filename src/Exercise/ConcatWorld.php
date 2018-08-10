<?php

namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

class ConcatWorld extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Concat World';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Concatenate 2 strings';
    }


    /**
     * @return string[][]
     */
    public function getArgs()
    {
        $args_len = rand(3, 20);
        $words = ["concatenate", "lion", "dancer", "hello", "number", "book"];
        $args = [];

        for ($i = 0; $i < $args_len; $i++) {
            $args[] = $words[array_rand($words)];
        }

        return $args;
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}

