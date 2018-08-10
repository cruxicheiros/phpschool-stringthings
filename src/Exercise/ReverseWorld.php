<?php

namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

class ReverseWorld extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Reverse World';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Reverse order of words in a string';
    }


    /**
     * @return string[][]
     */
    public function getArgs()
    {
        $sentence_length = rand(2, 20);
        $words = ["concatenate", "lion", "dancer", "hello", "number", "book"];
        $sentence = "";

        for ($i = 0; $i < $sentence_length; $i++) {
            $sentence .= " " . $words[array_rand($words)];
        }

        return [$sentence];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}

